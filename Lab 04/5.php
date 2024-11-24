<?php
if(isset($_REQUEST['submit']))
{
    if(isset($_REQUEST['Degree']))
    {
        $degree=$_REQUEST['Degree'];
        if(count($degree)<2)
        {
            echo "At least two degrees required!";
        }
        else
        {
            echo "Degrees selecetd" ;
        }
    }
    else
    {
        echo "Please Select";
    }
}
?>