<?php
include "..\model\art.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchArt=$connection->ShowAll($conobj,"art");

if ($SearchArt->num_rows > 0) {

    // output data of each row
    while($row = $SearchArt->fetch_assoc()) {

      echo "Art id : ".$row["A_id"]."<br>";
      echo "Art Name : ".$row["A_Name"]."<br>";
      echo "Art Description : ".$row["A_Desc"]."<br>";
      echo "Art Category : ".$row["A_Category"]."<br>";
      echo "Aer price : ".$row["A_Price"]."<br>";
      echo "Artist Name : ".$row["Artist_Name"]."<br>";
      echo "<img src='".$row['A_Picture']. "'  ><br><br>";
      

    }
}

?>

<h3><a href="artistdashboard.php">Back</a></h3>