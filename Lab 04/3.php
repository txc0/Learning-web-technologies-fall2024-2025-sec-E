<?php
session_start();
if(isset($_REQUEST["submit"]))
{
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $_SESSION['errors']=[];
    $_SESSION['form_data'] =['day'=>$day,'month'=>$month,'year'=>$year];

    if(empty($day))
    {
        $_SESSION['errors'][]="Day cannot be empty";
    }
    if(empty($month))
    {
        $_SESSION['errors'][]="Month cannot be empty";
    }
    if(empty($year))
    {
        $_SESSION['errors'][]="Year cannot be empty";
    }
    if (!empty($day) && !is_numeric($day)) {
        $_SESSION['errors'][] = "Day must be a number.";
    }
    if (!empty($month) && !is_numeric($month)) {
        $_SESSION['errors'][] = "Month must be a number.";
    }
    if (!empty($year) && !is_numeric($year)) {
        $_SESSION['errors'][] = "Year must be a number.";
    }
    if (!empty($day) && ($day < 1 || $day > 31)) {
        $_SESSION['errors'][] = "Day must be between 1 and 31.";
    }
    if (!empty($month) && ($month < 1 || $month > 12)) {
        $_SESSION['errors'][] = "Month must be between 1 and 12.";
    }
    if (!empty($year) && ($year < 1953 || $year > 1998)) {
        $_SESSION['errors'][] = "Year must be between 1953 and 1998.";
    if (empty($_SESSION['errors'])) {
        $_SESSION['success'] = "Date of Birth is valid: $day/$month/$year";
        unset($_SESSION['form_data']); // Clear form data
    }
    header("Location: dob_form.php");
  
    }
}

?>

