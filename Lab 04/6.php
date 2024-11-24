<?php
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["blood"]))
        {
            header("Location:6.html");
        }
        else
        {
            $grp = $_POST["blood"];
            echo "Blood group selected and blood group is $grp";
        }
    }
?>