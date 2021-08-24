

<?php
//include("../Control/mregistrationhandler.php");
?>

<html>
<head>
   <style>
        body{
        background-color:rgb(223,223,242);
        }
 </style> 

<script src="../jscontrollers/RegValidation.js">  </script>
<script src="..\jscontrollers\CheckEmail.js"> </script>
<script src="..\jscontrollers\CheckUsername.js"> </script>
<h2>Registration</h2>



<p><a href="mlogin.php">Go Back</a></p>

</head>



<body>

<center>



<form action='../control/process.php' onsubmit="return validateForm()"  method="post"  enctype="multipart/form-data">

<table>

<tr>
<td>Full Name<br><br></td> 
<td><input type="text" id="name" name="name"><p id="errorname"></p></td>
</tr>

<tr>
<td>Email<br><br></td>
<td><input type="text" id="email" name="email"  onkeyup="showmyuser()"><p id="erroremail"></p></td>
</tr>

<tr>
<td>User Name<br><br></td>
<td><input type="text" id="uname" name="uname"  onkeyup="Checkmyuser()"> <p id="errorusername"></p></td>
</tr>

<tr>
<td>Password<br><br></td>
<td><input type="password" id="pass" name="pass"><p id="errorpass"></p></td>
</tr>

<tr>
<td>Confirm Password <br><br></td>
<td><input type="password" id="cpass" name="cpass"> <p id="errorconfPass"></p></td>
</tr>


<tr>
<td>Address<br><br></td>
<td><input type="text" id="address" name="address" ><p id="erroraddress"></p></td>
</tr>

<tr>
<td>Phone Number<br><br></td>
<td><input type="text" id="phone" name="phone" ><p id="errorphone"></p></td>
</tr>


<tr>
<td>Gender</td>
<td>
<input type="radio" id="male" name="gender" value="male" >Male
  <input type="radio" id="female" name="gender" value="female">Female
  <input type="radio" id="other" name="gender" value="other">Other<p id="errorgender"></p>
  </td>
</tr>
<tr>
<td>Date Of Birth  </td>
<td>
<input type="date" id="dob" name="dob"><br><br>  </td>
</tr>

<tr>
<td>Please Choose a photo :
</td>
<td><input type="file" name="fileupload"></td>
</tr>

</table>
<input type="reset" name="reset" value="Reset">
<input type="submit" name="submit" value="submit">

</form>
    </center>
</body>


</html>