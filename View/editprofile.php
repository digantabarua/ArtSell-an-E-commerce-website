<?php
session_start(); 
include('../model/db.php');
include('../Control/updatecheck.php');

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../View/artistlogin.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"artist",$_SESSION["username"]);

if ($userQuery->num_rows > 0) {
  echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "fullname : <input type='text' name='fullname' value=".$row["fullname"]." > <br>";
      echo "email : <input type='text' name='email' value=".$row["email"]." ><br>";
      
      if(  $row["gender"]=="female" )
      {        $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
     echo "Gender:
     <input type='radio' name='gender' value='female' $radio1>Female
     <input type='radio' name='gender' value='male' $radio2>Male
     <input type='radio' name='gender' value='other' $radio3> Other";
    }
    echo   "<input name='update' type='submit' value='Update'>";
  } 

  else {
    echo "0 results";
  }



?>
