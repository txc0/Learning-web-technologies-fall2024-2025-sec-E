<?php
    $n1 = '*';
    for($x=0; $x<=3; $x++)
    {
     for($y=0;$y<$x;$y++)
        {
            echo "$n1";
        }
    echo " \r<br>";
        
    }
    echo " \r<br>";

    for($x=4;$x>0;$x--)
    {
        for($y=1;$y<$x;$y++)
        {
            echo" $y";
        }

       echo " \r<br>"; 
    }

    echo " \r<br>";

    $a = 'A';
    for($x=0; $x<=3; $x++)
    {
     for($y=0;$y<$x;$y++)
        {
            echo "$a";
            $a++;
        }
    echo " \r<br>";
        
    }




?>