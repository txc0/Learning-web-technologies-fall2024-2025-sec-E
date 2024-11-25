<?php
    session_start();
    if(isset($_REQUEST['Register']))
    {
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);
        $confirm_password = $_POST['confirm_password'];
        $email = trim($_REQUEST['email']);
        $phone = trim($_REQUEST['phone']);
        $address = trim($_REQUEST['address']);

        if($username==NULL || $password==NULL)
        {
            echo "Fill the form";
        }
        if(!isset($_SESSION['users'])){
            $_SESSION['users']= [];
        }
        else
        {
            $_SESSION['users'][$username]=$password;
            echo "Registration Successfull";
            header("Location: Login.html");

        }
        


    }        
?>