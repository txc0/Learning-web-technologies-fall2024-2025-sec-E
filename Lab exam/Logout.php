<?php

    session_start();
    //unset($_SESSION['status']);
    session_unset();

    header('location: login.html');
?>