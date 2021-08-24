<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "artsell";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function AddProduct($conn,$table,$aname,$adesc,$acate,$aprice,$aimage,$artistname)
 {
$result = $conn->query("INSERT INTO $table VALUES('','$aname','$adesc','$acate',$aprice,'$aimage','$artistname')");
 return $result;
 }

 function SearchArt($conn,$table,$aname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE A_Name='".$aname."'");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>