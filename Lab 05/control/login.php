<?php session_start();
if(!isset($_SESSION['status']))
{
    header("location: registration.html");
}
?>

<html>
    <body>
        hi<?php echo $_SESSION['username'] ?>
    </body>
</html>

<?php
    unset($_SESSION['status']);
?>


