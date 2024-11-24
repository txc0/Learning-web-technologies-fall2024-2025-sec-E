<?php
    if(isset($_REQUEST["submit"]))
    {
        if(!isset($_REQUEST["gender"]))
        {
           header("Location:4.html");
        }
        else{
            $gender = $_POST['gender'];
            echo "Gender selected $gender";
        }
    }
?>