<?php
class DatabaseConnection{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "buyer";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function CheckUser($conn,$table,$User,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE UserName='". $User."' AND Password='". $password."'");

if ($result->num_rows > 0)
{
    echo "Login Successful <br>";
}

else {
echo "Login Failed !<br>";
}
return $result;
}

function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE UserName like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$table,$Phone)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Phone like '".$Phone."' ");
    return $result;
}

function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND UserName='". $User."'");
    return $result;
}
function ShowBuyerData($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE UserName='". $User."'");
    return $result;
}


function ShowData2($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '%".$Email."%' ");
    return $result;
}

function SearchProduct($conn,$table,$Pname)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE P_Name like '%".$Pname."%' ");
    return $result;
}
//
 


 function InsertData($conn,$table,$Name,$User,$email,$Password,$Phone,$Address,$Date,$validateradio,$target_File)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO $table (FullName,UserName,Email,Password,Address,Phone,DOB,Gender,File_Path) VALUES(?,?,?,?,?,?,?,?,?)"); 
    $stmt->bind_param("sssssssss",$Name,$User,$email,$Password,$Address,$Phone,$Date,$validateradio,$target_File);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }


 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username);
    return $result;
 }

 function Count($conn,$table,$Data)
 {
    $result = $conn->query("SELECT COUNT('Validation') FROM ". $table." WHERE Validation like False");
    return $result;
 } 

 function UpdateStatus($conn,$table,$Data)
 {
    $sql = "UPDATE $table SET Validation='$Data' WHERE Validation='False'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }




 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }

 

//$conobj,"buyer_reg",$Name,$Email,$_SESSION['User'],$Phone,$Address,$Var_Gender
 function UpdateUser($conn,$table,$Name,$Email,$User,$Phone,$Address,$Gender)
 {
     $sql = "UPDATE $table SET FullName='$Name',Email='$Email', UserName='$User',Phone='$Phone',Address='$Address',Gender='$Gender'  WHERE UserName='$User'";
   //$stmt->execute()
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }

 

 function UpdateCustomer($conn,$table,$Name,$Email,$Phone,$Address,$Gender)
 {
    $sql = "UPDATE $table SET FullName='$Name',Phone='$Phone',Address='$Address',Gender='$Gender' WHERE Email='$Email'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }

 

 function UpdateUserReq($conn,$table,$result,$Email)
 {
     $sql="UPDATE $table set Validation ='$result' where Email like '$Email'";
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }

 function DeleteUser($conn,$table,$User)
 {
     $sql="DELETE from $table where UserName like '$User'";
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
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