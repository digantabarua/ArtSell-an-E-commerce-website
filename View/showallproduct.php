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
</head>




<legend>Available Product </legend>
  
<?php
include "..\model\DatabaseConnection.php";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

$SearchProperty=$connection->ShowAll($conobj,"product");

if ($SearchProperty->num_rows > 0) 
{

    // output data of each row
    while($row = $SearchProperty->fetch_assoc()) 
    {

      echo "Product Id : ".$row["P_ID"]."<br>";
      echo "Product Name : ".$row["P_Name"]."<br>";
      echo "Product Description : ".$row["P_Desc"]."<br>";
      echo "Product Category : ".$row["P_Cate"]."<br>";
      echo "Product price : ".$row["P_Price"]."<br>";
      echo "<img src='".$row['P_Image']."' width=15%;>";
      //echo "<img src='".$row['P_Image']."' width:5%; ><br><br>";

    }
}
else 
{
  echo "No Available product to Show";
}

?>


</body>
</html>
