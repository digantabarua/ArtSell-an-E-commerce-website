<?php session_start();
include "../model/databaseconnection.php";
$Photo=$FullName="";
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-image: url('background.jpg');">
<script >


$(document).ready(function(){
  $("#hide").click(function(){
    $("h3").hide();
  });
  $("#show").click(function(){
    $("h3").show();
  });
});

$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(5000);
  });
});

</script>
<?php
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowBuyerData($conobj,"buyer_reg",$_SESSION["User"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"]; 
      $User=$row["UserName"];
      $photo=$row["File_Path"];
 
  } 
}

$name=$_SESSION['User'];
$value=$_SESSION['Name'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(2000),"/");
    
}


?>
<table>
  <tr>

  <td>
<?php

$img=$_SESSION['file'];
echo '<div1 class="class1">'."<img src='".$photo."' class='class1-img' width=20%;> <br><br></div1>";
echo'<div2 class="mydiv"> '."<h3> Name : ".$FullName." </h3>";
if(!isset($_COOKIE[$name]))
{
    echo "<div3> <p>New User : ".$_SESSION['Name']."</p>";
}
else {
    echo "<p>Old User : ".$_COOKIE[$name]."</p>";
}
?>

<a href="updateprofile.php">Update Profile</a><br>
<a href="../control/logout.php">Log out</a>
</td>




<td>

<button>Buyer Operation</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;"><a href="SearchProduct.php"> Search Product </a> </div><br>
<div id="div2" style="width:80px;height:80px;display:none;"><a href="ShowallProduct.php"> Show All Product </a> </div><br>
</td>

</tr>


</table>




<button id="hide">Hide My Name</button>
<button id="show">Show My Name</button>


</body>
</html>