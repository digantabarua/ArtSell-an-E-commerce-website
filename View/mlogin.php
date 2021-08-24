<?php
session_start();

//include("../Control/mloginhandler.php");
?>


<!DOCTYPE html>
<html>

<head>
	 <style>
		    body{
				background-color:rgb(223,223,242);
				
			}
		.my-font{
				font-size:25px;
				font-family:consolas;
			    }
		.btn-mine{
				background-color:rgb(185,143,221);
				border:none;
				color:white;
				width:99%;
				border-radius:3px;
				padding:5px;
				margin-top:15px;
			}	
	 </style> 
<title>Artsell</title>
<script src="../jscontrollers/LoginValidation.js"></script>
<?php include "../Control/LoginValidation.php"; 

if(isset($_SESSION["User"])){

    header("location: Buyer.php");
}
?>
</head>
<body>


<center>

<h2>Login</h2>

</center>

<p><a href="../Home.php">Go Back</a></p>

<center>

<form method="post" action=""  onsubmit="return validateForm()"> 
<table>
<tr>
<td>Username:<br><br></td>
<td><input type="text" id="uname" name="uname" > <p id="erroruser"></p></td><br><br></td>
</tr>
<tr>
<td>Password: </td>
<td><input type="password" id="pass" name="pass" ><p id="errorpass"></p></td> <br><br></td>
</tr>
</table>
<input type="submit" name="Login" value="Login">
</form>

<p>Don't have an account? <a href="mregistration.php">Sign Up!</a></p>

</center>
</body>

</html>