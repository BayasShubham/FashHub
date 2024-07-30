
<?php
    require 'db/config.php';
    if(isset($_REQUEST['c']) && isset($_REQUEST['p'])){
        $sql="SELECT * FROM `user` WHERE `email`='{$_COOKIE['id']}' ";
        if(mysqli_query($conn,$sql)){
            $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
            $data='';
            if(empty($row['user_cart'])){
                $data=json_decode("{}" , true);
            }
            else{
                $data=json_decode($row['user_cart'],true);
            }
            $temp=json_decode("{}",true);
            $temp['category']=$_REQUEST['c'];
            $temp['product']=$_REQUEST['p'];
            // $temp="{'category':$_REQUEST['c'],'product':$_REQUEST['p']}";
            $data[count($data)+1]=$temp;
            $data=json_encode($data);
            // echo $data;
            $sql="UPDATE `user`  SET `user_cart`='{$data}' WHERE `email`='{$_COOKIE['id']}'";
            if(mysqli_query($conn,$sql)){
                echo "UPDATED";
            }
        }   
    }    
    
    if(isset( $_REQUEST['data'])){
        $sql="SELECT * FROM `user` WHERE `email`='{$_COOKIE['id']}' ";
        if(mysqli_query($conn,$sql)){
            $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
            $data='';
            if(empty($row['user_order'])){
                $data=json_decode("{}" , true);
            }
            else{
                $data=json_decode($row['user_order'],true);
            }
            $temp=json_decode($_REQUEST['data'],true);
            $temp['Products']=json_decode($row['user_cart'],true);
            $data[count($data)+1]=$temp;
            $data=json_encode($data);
            $sql="UPDATE `user`  SET `user_order`='{$data}',`user_cart`=null WHERE `email`='{$_COOKIE['id']}'";
            if(mysqli_query($conn,$sql)){
                echo "UPDATED";
            }
        }
    }

?>