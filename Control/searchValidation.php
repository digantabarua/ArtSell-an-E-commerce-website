<?php 
include "..\model\art.php";
$connection=new db();
$error="";

if(isset($_REQUEST['search']))
{
    
    if(empty($_POST['aname']))
    {
        $error=" Art name can not empty !!";
    }

    else 
    {
        $aname=$_POST['aname'];
        $conobj=$connection->OpenCon();

        $SearchArt=$connection->SearchArt($conobj,"art",$aname);

        if ($SearchArt->num_rows > 0) {
        
            // output data of each row
            while($row = $SearchArt->fetch_assoc()) {

              echo "Artist Name: ".$row['Artist_Name']."<br>";
              echo "Art id : ".$row["A_id"]."<br>";
              echo "Art Name : ".$row["A_Name"]."<br>";
              echo "Art Description : ".$row["A_Desc"]."<br>";
              echo "Art Category : ".$row["A_Category"]."<br>";
              echo "Art price : ".$row["A_Price"]."<br>";
              echo "ART: "; echo "<img src='".$row['A_Picture']."'><br>";
             
            }


    }
}
}

?>