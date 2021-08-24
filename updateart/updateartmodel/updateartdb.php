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
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$fullname,$email,$password,$address,$phone,$gender,$dob)
 {
     $sql = "UPDATE $table SET fullname='$fullname', email='$email', password='$password', address='$address',phone='$phone', gender='$gender',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>