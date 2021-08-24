<?php
session_start();
if(isset($_SESSION['uname'])){
  header("location: artistdashboard.php");
  }
include("../Control/artistloginhandler.php");
?>
<!DOCTYPE html>
<html  lang="en">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
.center {
  padding: 70px 0;
  border: 3px solid white;
  text-align: center;
}
</style>
<style>
h1 {
  font-size: 4em; /* 40px/16=2.5em */
  text-shadow: 2px 2px 4px #000000;
}
</style>
<style>
h2 {
  font-size: 4em; /* 40px/16=2.5em */
  text-shadow: 2px 2px 4px #000000;
}
</style>
<head>
<div class="center">
<style>
body {
  background-image: url('background/artist.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<title>Artsell</title>
</head>

<body>    
<center>
<h1><p  style="color:white" size=><b><strong>ArtSell</p></h2>
<h2><p  style="color:white"><b><strong>Artist Login</p></h3>
</center>
<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td><p  style="color:white"><b><strong><label for="uname">Username:</label></p><br></td>
<td><input type="text" id="username" name="uname" value=""><?php echo $unameErr;?><br><br></td>
</tr>
<tr>
<td><p  style="color:white"><b><strong><label for="pass">Password:</label></p><br></td>
<td><input type="password" id="pass" name="pass" value=""><?php echo $passErr;?><br><br></td>
</tr>
</table>
<input type="submit" name="login">
</form>

<p  style="color:white"><b><strong>Don't have an account? <a href="artistregistration.php">Sign Up!</a></p>
<p  style="color:white"><b><strong><a href="../Home.php">Go Back To HomePage</a></p>

<p  style="color:white"><b>Today is: <i class='far fa-calendar' style='font-size:24px' colour:white></i > <span id="date"></span></p>
<script>
var dt = new Date();
document.getElementById("date").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear());
</script>

<p style="color:white"><b>Time:  <i class='far fa-clock' style='font-size:24px' colour:white></i> <span id="time"></span></p>
<script>
var dt = new Date();
document.getElementById("time").innerHTML = dt.toLocaleTimeString();
</script>
<h4><p style="color:white"><a href="../Home.php">Go Back</a></p></h4>
</center>
</div>
</html>