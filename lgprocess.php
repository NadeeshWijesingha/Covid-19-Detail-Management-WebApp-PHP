<?php
session_start();
require_once('lgconnection.php');

if(isset($_POST['login'])){


    if(empty($_POST['username']) || empty($_POST['password'])){

header("location:main_login.php?Empty= Please Fill the Blanks");

    }else{
        $query="select * from admin where username='".$_POST['username']."' and password='".$_POST['password']."'";
        $result=mysqli_query($con,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['user']=$_POST['username'];
            header("location:admin_controller.php");
        }else{
            echo '<script type="text/javascript">'; 
            echo 'alert("The username or password you entered is incorrect . . !");'; 
            echo 'window.location.href = "main_login.php";';
            echo '</script>';
        }

    }
    
}else{

}


?>