<?php

require 'config.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_REQUEST['login-submit'])){
           
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            $sql = "SELECT `password`,`name` FROM `user` WHERE `email`='$email';";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
                $row = mysqli_fetch_assoc($result);
                    if($password==$row['password'] ){
                        echo "<script> document.cookie='id={$email}' </script>";
                        echo "<script> document.cookie='name={$row['name']}' </script>";
                        echo "<script> alert(' Login successful') </script>";
                    }      
            } 
            else {
                echo "<script> alert(' Login Unsuccessful') </script>";
            }
        }
    
        if(isset($_REQUEST['sign-up-submit'])){
                $name=$_REQUEST['fullname'];
                $email=$_REQUEST['email'];
                $password=$_REQUEST['password'];
                
            $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";

            if (mysqli_query($conn, $sql)) {
                echo "<script> console.log('New record created successfully') </script>";
            } 
            else {
                echo "<script> console.log('Error: " . $sql . "<br>" . mysqli_error($conn)."') </script>";
                // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
  mysqli_close($conn);


?>