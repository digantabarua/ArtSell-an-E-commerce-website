<?php
include "..\model\DatabaseConnection.php";
$Pname=$Pdesc=$Pcat=$Pprice=$Pimg=""; 
$UserType="";
$hasError=false;
$error=""; 



$Pname=$_POST["pname"];
if($Pname=="")
{
  echo "Enter product Name to Search!!"; 
}
else 
{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchProduct($conobj,"product",$Pname);
if ($userQuery->num_rows > 0) {

    while($row = $userQuery->fetch_assoc()) {
      $Pname=$row["P_Name"];
      $Pdesc=$row["P_Desc"];
      $Pcat=$row["P_Cate"];
      $Pprice=$row["P_Price"];
      $Pimg=$row["P_Image"];

     

       echo "Product Name: <b>".$Pname."</b><br>";
       echo "Product Description: <b>".$Pdesc."</b><br>"; 
       echo "Product Category: <b>".$Pcat."</b><br>"; 
       echo "Product Price: <b>".$Pprice."</b><br>"; 
       echo "<img src='".$Pimg."' width=15%;>";
     
      
  } 

}
else 
echo "Product Doesn't Found !!!<br>";
}
?>
