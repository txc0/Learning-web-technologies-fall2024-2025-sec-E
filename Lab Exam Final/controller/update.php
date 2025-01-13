<?php
require_once('../model/user.php');

$username = trim($_POST['username']);
$contactNo= trim($_POST['contact_No']);
if (isset($_POST['update'])) {
    if (updateAuthor($username,$password)) {
        header("location: ../view/card.html");
    }
}

header("location: ../view/card.html");
?>