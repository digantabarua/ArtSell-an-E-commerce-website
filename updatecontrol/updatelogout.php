<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../View/artistlogin.php"); // Redirecting To Home Page
}
?>
