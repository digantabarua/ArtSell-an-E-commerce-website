<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<?php
include("../Control/artistregistrationhandler.php");
?>
<style>
body {
  background-image: url('background/registration.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<head>

<style>
table {
  border: 2px solid black;
  text-align: center;
}
</style>
<style> 
div {
  width: 500px;
  height: 50px;
  background-color: white to green;
  
  animation-duration: 100s;
}

</style>

<title>Artsell</title>
</head>
<body>
<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$uname=mysqli_real_escape_string($con,$_POST['uname']);
$pass=mysqli_real_escape_string($con,$_POST['pass']);
$cpass=mysqli_real_escape_string($con,$_POST['cpass']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$dob=mysqli_real_escape_string($con,$_POST['dob']); 
$emailquery = " select * from artist where email='$email' ";

$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);

 if($emailcount>0){
   echo "email already exist!";
 }
 else{
   if($pass===$cpass){
    
$insertquery="insert into artist((fullname, email, username, password, address, phone, gender, dob)) values('$fname','$email','$uname','$pass','$address','$phone','$gender','$dob')";

$iquery = mysqli_query($con, $insertquery);
  if($con){
    ?>
    <script>
    alert("Inserted Successful");
    header("location:artistlogin.php") ;
    </script>
    <?php
}
else{
   ?>
   <script>
   alert("No Inserted");
   </script>
   <?php
}
}
   else{
    ?>
    <script>
    alert("Password are not matching");
    </script>
    <?php
   }
 }
}
?>
<center><div><h2>Register as an Artist!</h2></div></center><br>

<center>
<form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
<table>
<tr><td><p  style="color:black"><b><strong><label for="fname">Full Name : </label></p><br></td> 
<td><input type="text" id="fname" name="fname" required><?php echo $fnameErr;?><br><br></td></tr>

<tr><td><p  style="color:black"><b><strong><label for="email">Email : </label></p><br></td>
<td><input type="text" id="email" name="email" required><?php echo $emailErr;?><br><br></td></tr>

<tr><td><p  style="color:black"><b><strong><label for="uname">User Name : </label></p><br></td>
<td><input type="text" id="uname" name="uname" required><?php echo $unameErr;?><br><br></td></tr>

<tr><td><p  style="color:black"><b><strong><label for="pass">Password : </label></p><br></td>
<td><input type="password" id="pass" name="pass" required><?php echo $passErr;?><br><br></td></tr>

<tr><td><p  style="color:black"><b><strong><label for="cpass">Confirm Password : </label></p><br></td>
<td><input type="password" id="cpass" name="cpass" required><?php echo $cpassErr;?><br><br></td></tr>
<tr><td><p  style="color:black"><b><strong><label for="address">Address : </label></p><br></td>
<td><input type="text" id="address" name="address" required><?php echo $addressErr;?><br><br></td></tr>
<tr><td><p  style="color:black"><b><strong><label for="phone">Phone Number : </label><br></td>
<td><input type="text" id="phone" name="phone" required><?php echo $phoneErr;?><br><br></td></tr>
</table>
<legend>Gender</legend>
<input type="radio" id="male" name="gender" value="male" checked>
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>

<legend>Date Of Birth : </legend>
<input type="date" id="dob" name="dob" required><?php echo $dobErr;?><br>
<input type="Reset"> 
<input type="submit" name="submit">
<p><a href="artistlogin.php">Go Back To Login Page</a></p>

<p  style="color:black"><b>Today is: <i class='far fa-calendar' style='font-size:24px' colour:white></i > <span id="date"></span></p>
<script>
var dt = new Date();
document.getElementById("date").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear());
</script>

<p style="color:black"><b>Time:  <i class='far fa-clock' style='font-size:24px' colour:white></i> <span id="time"></span></p>
<script>
var dt = new Date();
document.getElementById("time").innerHTML = dt.toLocaleTimeString();
</script>
</center>

</form>



</html>