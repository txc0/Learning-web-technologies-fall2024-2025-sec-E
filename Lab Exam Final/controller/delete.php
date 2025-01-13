<?php
require_once('../model/AuthorModel.php');

$username = trim($_POST['username']);
if (isset($_POST['delete'])) {
    
    if (deleteAuthor($username)) {
        echo "Deleted Successfully";
    }
    else
    {
        echo "NOT FOUND";
    }
}


?>