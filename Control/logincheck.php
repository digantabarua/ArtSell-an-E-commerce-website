<?php
include('../model/db.php'); 
session_start(); 

 $error="";
$uname = $pass = "";
$flag = 1;
$unameErr = $passErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST['submit'])) {
if (empty($_POST['uname']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"artist",$uname,$pass);

if ($userQuery->num_rows > 0) {
$_SESSION["uname"] = $uname;
$_SESSION["pass"] = $pass;

   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}
}

?>