isloggedin();
function isloggedin(){
    if(document.cookie!=''){
        let req=new XMLHttpRequest();
        req.onreadystatechange=function(){
            if(this.status==200 && this.readyState==4){
                document.querySelector(".name").innerText=this.responseText;
            }
        }
        req.open("post","id.php?q=true",true)
        req.send()
    }
}

function logout(){
    document.cookie="id=;max-age=0"
    document.cookie="name=;max-age=0"
    location.reload();
}