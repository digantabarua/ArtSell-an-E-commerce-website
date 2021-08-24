<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../updatecontrol/updatelogin.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body {
  background-image: url('background/pageone.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
<style>
    
.center {
  padding: 100px 0;
  border: 4px solid orange;
  text-align: center;
}
</style>
<br><br>
<div class="center">
<h1>Welcome to Edit Section</h1>
<h2> Hi, <?php echo $_SESSION["username"];?></h2>
<h1>Here you can update your Information</h1>
<br>

<h2>Do you want to update your profile than below <br></h2>
<br><br><h2><a href="pagetwo.php">->Click Me!<- </a></h2> </h5>

<br/>

 <h3>Do you want to <a href="../Control/logout.php">logout</a></h3>

 
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
</div>
</body>
</html>

<?php


?>   


