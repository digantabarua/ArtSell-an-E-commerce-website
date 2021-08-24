<?php
include ('../Control/addproductcheck.php');
session_start(); 


?>

<!DOCTYPE html>
<html  lang="en">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
.center {
  padding: 70px 0;
  border: 3px solid orange;
  text-align: center;
}
</style>
<head>
<div class="center">
<style>
body {
  background-image: url('background/images.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<style>
h1 {
  font-size: 8em; /* 40px/16=2.5em */
  text-shadow: 2px 2px 4px #000000;
}
</style>
<title>Artsell</title>
</head>
<body>
<center>
<br><br><br>
<br><br><br>
<h1><p  style="color:orange " ><b><strong>Publish Your Art!</p></h1>
<form action="" method="post" enctype="multipart/form-data">
<p  style="color:orange " ><b>Art Name : <input type="text" name="aname"><br><br></p>
<p  style="color:orange " ><b>Art Description : 
<textarea id="adesc" name="adesc" rows="4" cols="30">
  Dear Artist!Describe you art.
  </textarea><br><br>
<label for="acate">Choose Art Medium:</label>
  <select name="acate" id="acate">
    <option value="Oil painting">Oil painting</option>
    <option value="Acrylic painting">Acrylic painting</option>
    <option value="Water Colour">Water Colour</option>
    <option value="Ink">Ink</option>
  </select><br><br></p>
  <p  style="color:orange " ><b>Art Price <input type="number" name="aprice">(Taka) BDT <br><br></p>
  <p  style="color:orange " ><b>Product Image <input type="file" name="aimage"><br><br></p>
  <p  style="color:orange " ><b>Artist Name <input type="text" name="artistname"><br><br></p>
<input type="submit" name="add" value="ADD Product">


<h2><p style="color:white"><b><a href="../View/artistdashboard.php"><?php echo $_SESSION["uname"];?>!</p>
</h2>


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

</body>
</html>