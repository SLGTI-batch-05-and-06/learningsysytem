<?php 

if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $date = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
     
    if(empty($username)){
        
        header("Location:index.php?error=User Name is required");
        exit();

    }else if(empty($password)){

    }else{
        echo "valid input";
    }


}
else{ 
    header("Location:index.php error=Password is required");
    exit();

}


?>