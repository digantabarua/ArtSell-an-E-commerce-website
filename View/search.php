<?php
include "..\Control\searchValidation.php";
session_start(); 


?>

<!DOCTYPE html>
<html>
<body>
<h2>Search Art </h2>
<form action='' method='post'>

Art Name: 
<input type='text' name="aname"><?php echo $error; ?><br><br>
<input type='submit' name="search" value="Search">

<h3><a href="artistdashboard.php">Back</a></h3>
</form>
</body>
</html>