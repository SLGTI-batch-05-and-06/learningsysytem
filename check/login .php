<?php

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM login WHERE username='$username'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        $r=mysqli_fetch_assoc($result);
        if($password == $r['password']){

            header("location:home.php");
        }
    }
}

?> 