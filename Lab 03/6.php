<?php
    $n = array(1,2,3,4,5,6,78);
    $s = 6;
    $search = 78;
    for ($x = 0; $x <= $s; $x++)
    {
        if($n[$x]==$search)
        {
            echo "Found";
        }
    }
?>