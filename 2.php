<?php
    if(isset($_GET['submit']))
    {
        $email = $_GET['email'];
        if($email==NULL)
        {
            echo "write your email";
        }
    }

?>