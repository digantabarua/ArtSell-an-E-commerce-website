<?php 
if(isset($_SESSION["User"])){

    header("location: Buyer.php");
}
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
<script src="../jscontrollers/Search.js"></script>

</head> 
<body style="background-image: url('background2.jpg');">


 
<legend> Search Product </legend>
<div> 
Product Name: <input type=text name="pname" placeholder="Enter Product Name to Search" id="pname" onkeyup ="showproperty()" ><br>
<p id="mytext"></p> 

</div> 
</body>
</html>

