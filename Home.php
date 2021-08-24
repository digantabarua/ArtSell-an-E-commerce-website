<!DOCTYPE html>
<html>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
.center {
  padding: 70px 0;
  border: 3px solid white;
  text-align: center;
}
</style>

<div class="center">
<style>
table, th, td {
  border: 2px solid white;
  text-align: center;
}
</style>


<style>
body {
  background-image: url('arthome.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<body>

<h1 style="background-color:powderblue;">Artsell</h1>

<h3 style="background-color:IndianRed;">Welcome To The Home Of Art</h3>
<center>
<table>
<tr>

    <th style="background-color:white;"><b>Select User<b></th>
</tr>

<tr>
    <td style="background-color:white;"><a href="views/login.php">Admin</a></td>
</tr>
<tr>
    <td style="background-color:white;"><a href="View/mlogin.php">Buyer</a></td>
</tr>
<tr>
    <td style="background-color:white;"><a href="View/artistlogin.php">Artist</a></td>
</tr>
<tr>
    <td style="background-color:white;"><a href="views/login.php">Delivery Guy</a></td>
</tr>

</table>
<tr>
  
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
</tr>
</center>
</div>
</body>
</html>