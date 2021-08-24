<?php
include('../updatecontrol/updatelogincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Enter your User Name and Password Again!</h2>
<h3>Don't worry we are making sure it's you</h3>
<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input name="submit" type="submit" value="LOGIN">
</form>
<br>
<?php echo $error; ?>

</body>
</html>