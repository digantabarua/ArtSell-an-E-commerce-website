<?php
session_start(); 

include('../updatecontrol/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../updatecontrol/updatelogin.php"); // Redirecting To Home Page
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
$radio1=$radio2=$radio3=$radioValidation="";
$fullname=$email=$password=$address=$phone=$dob="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"artist",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $fullname=$row["fullname"];
      $email=$row["email"];
      $password=$row["password"];
      $address=$row["address"];
      $phone=$row["phone"];
      $dob=$row["dob"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else if($row["gender"]=="other")
      {$radio3="checked";}
      else
      {
        $radioValidation="Nothing was checked";
      }
   
  } 
}
  else {
    echo "0 results";
  }



?>
 <?php echo $error; ?>
<form action='' method='post'>
Fullname : <input type='text' name='fullname' value="<?php echo $fullname; ?>" >
<br><br>
Email : <input type='text' name='email' value="<?php echo $email; ?>" > <br><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" >
<br><br>
Address : <input type='text' name='address' value="<?php echo $address; ?>" >
<br><br>
Phone : <input type='text' name='phone' value="<?php echo $phone; ?>" >
<br><br>
DOB : <input type='date' name='dob' value="<?php echo $dob; ?>" ><br><br>

 Gender:
 <?php echo $radioValidation; ?>
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other
     <br>
     <br>
     <input name='update' type='submit' value='Update'>  

    
<br>
<br>
<a href=" ../View/artistdashboard.php">Back </a>

<a href="../updatecontrol/updatelogout.php"> logout</a>

</body>
</html>