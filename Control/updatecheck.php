<?php
include('../model/ds.php');
 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['fullname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new ds();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"artist",$_SESSION["username"],$_POST['fullname'],$_POST['email'],$_POST['password'],$_POST['address'],$_POST['phone'],$_POST['gender'],$_POST['dob']);
echo $userQuery;
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>