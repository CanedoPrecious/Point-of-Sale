<?php

require('./config/database.php');

function validate($inputData)
{

    global $conn;

    $validateData= mysqli_real_escape_string($conn, $inputData);
    return trim($validateData);
}

function redirect($url, $status)
{
    $_SESSION['status']=$status;
    header('Location: '.$url);
    exit(0);
}

function msg()
{
    if (isset($_SESSION['status']))
     {
       echo '<div class="alert alert-success"><h6>'.$_SESSION['status'].'</h6></div>';
       unset($_SESSION['status']);
    }
}
?>