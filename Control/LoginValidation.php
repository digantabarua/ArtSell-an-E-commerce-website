<?php
include "..\model\DatabaseConnection.php";
$Name="";
$User="";
$Password="";
$validatepassword="";
$validateUser="";
$Var_User="";
$Var_Password="";
$hasError=false;
$count=0;
$loginError=true;
$Photo="";
$loginInfo="";

if(isset($_POST["Login"]))	{

$User=$_REQUEST["uname"]; 
$Password=$_REQUEST["pass"];
  
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUser($conobj,"buyer_reg",$User,$Password);
    
    $connection->CloseCon($conobj);

    if ($result->num_rows > 0)
     {
        while($row = $result->fetch_assoc())
        {
        echo "Name: " . $row["FullName"]. " User: " . $row["UserName"]."<br>";
        $_SESSION["User"]=$User;
        $_SESSION['Name']= $row["FullName"];
        $_SESSION['file']=$row["File_Path"];
        }

        date_default_timezone_set("Asia/Dhaka");
        $formdata = array(
            'Name'=> $_SESSION["Name"],
            'User'=> $_SESSION['User'],
            'Time'=>date('h:i:s'),
            'Date'=>date("d.m.y"),
         );
        
        
         $existingdata = file_get_contents('../File/data.json');
         $tempJSONdata = json_decode($existingdata);
         $tempJSONdata[] =$formdata;
         $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
         
         if(file_put_contents("../File/data.json", $jsondata)) {
              echo "Data successfully saved <br>";
          }
         else 
              echo "no data saved";









        }
        
        else {
        echo "0 results";
        }


}

?>