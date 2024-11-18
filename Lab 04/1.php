<?php 

    if(isset($_GET['submit'])){
        $username = $_GET['username'];

        if($username == null){
            echo "Null username";
        }
        else
        {
            if(strlen($username)<2)
        {
            echo "Minimum two character must contain";
        }
        elseif(!(($username[0]>='A' && $username[0]<='Z') 
                ||($username[0]>='a' && $username[0]<='z')))
        {
            echo  "Start with character";
        }
         else
        {
            $flag = true;
            for($i =0; $i<strlen($username); $i++)
            {
                if(!($username[$i]>='A' && $username[$i]<='Z')||
                    ($username[$i]>='a' && $username[$i]<='z') ||
                    $username[$i]== '-'||
                    $username[$i]== '.')
                {
                    $flag = false;
                    break;
                }    
               
            }
            if($flag)
            {
                echo $username;
            }
            else{
                echo "Invalid character";
            }
        }
       
        }

       
    }
?>