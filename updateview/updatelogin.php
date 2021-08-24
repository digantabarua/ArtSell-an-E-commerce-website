<?php
include('../updatecontrol/updatelogincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body {
  background-image: url('background/login.jpg');
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

<div class="center">
<br><br><br>
<h1>Enter your User Name and Password Again!</h1>
<h2><p style="color:orange">Don't worry we are making sure it's you</p></h2>
<br><br>
<form action="" method="post">
    <h2><input type="text" name="username" placeholder="Enter your username" required></h2>
    <h2><input type="password" name="password" placeholder="Enter your password" required></h2>
    <h2><input name="submit" type="submit" value="LOGIN"></h2>
    <br><br><br><br><br><br><br><br><br>
    <h4><p style="color:white"><a href="../View/artistlogin.php">Go Back</a></p></h4>
</form>

</div>
<br>
<?php echo $error; ?>

</body>
</html>