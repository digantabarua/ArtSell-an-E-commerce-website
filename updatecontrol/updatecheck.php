<?php
include('../updatemodel/updatedb.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['fullname']) || empty($_POST['email'])|| empty($_POST['password'])|| empty($_POST['address'])|| empty($_POST['phone'])|| empty($_POST['gender'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"artist",$_SESSION["username"],$_POST['fullname'],$_POST['email'],$_POST['password'],$_POST['address'],$_POST['phone'],$_POST['gender'],$_POST["dob"]);
if($userQuery==TRUE)
{
    ?>
    <script>
    alert("Inserted Successful");
    header("location:artistlogin.php") ;
    </script>
    <?php
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
