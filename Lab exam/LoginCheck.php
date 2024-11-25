<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);
        if(isset($_SESSION['users']))
        {
            if(isset($_SESSION['users'][$username]))
            {
                if($_SESSION['users'][$username]==$password)
                {
                   $_SESSION['username'] =$username;
                   header("Location:homepage.php");
                }
            }

        }
    
    }else{
        header('location: Login.html');
    }

?>