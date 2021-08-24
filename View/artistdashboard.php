<?php 
session_start();
if(empty($_SESSION["uname"])) 
{
header("Location: ../View/artistlogin.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html lang="en">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
.center {
  padding: 70px 0;
  border: 3px solid orange;
  text-align: center;
}
</style>
<style>
body {
  background-image: url('background/dashboard.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<div class="center">
<style>
h1 {
  font-size: 4em; /* 40px/16=2.5em */
  text-shadow: 2px 2px 4px #000000;
}
</style>
<style>
h4 {
  font-size: 2em; /* 40px/16=2.5em */
  text-shadow: 2px 2px 4px #000000;
}
</style>
<head>
<title>Artsell</title>
</head>

<body>

<center>
<h1><p  style="color:orange "text-shadow: 2px 2px 2px #000000; ><b>ArtSell</p></h1>
<h1><p  style="color:grey " text-shadow: 2px 2px 2px #000000; >Artist Dashboard</p></h1>
</center>
<center>  
<h4><p  style="color:white " ><b>Welcome Artist! </p><p style="color:white"><b><?php  echo $_SESSION["uname"];?>!</p></h4>
<h4><p style="color:white">Arts That are  <a href="../View/showallart.php">Available</a></p></h4>     
<h4><p style="color:white">Do you want to post your art? :</p></h4>  <h4><p style="color:white"><a href="../View/addproduct.php">->Click Me to Post Art<-</a></p></h4>
<h4><p style="color:white">Do you want to search?</p></h4> 
<h4><p><a href="../View/search.php">->Sreach Art<-</a></p></h4>
<h4><p style="color:white"> <a href="../View/showinfo.php"><?php echo $_SESSION["uname"];?>!</p></a></p></h4>       
<p style="color:white"><?php echo $_SESSION["uname"];?>!</p>
<h5><p style="color:white">Do you want to <a href="../Control/logout.php">logout</a></p></h5>
            
</center>
<center>
  
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
<br><br>
<h4><p style="color:white">This Site is Under Developmentation ⚒</h4>
<br><br>
</div>
</center>
</body>
</html>