<?php  // include "..\View\Registration.php" ; 
        include "../view/mregistration.php" ; 
       include "..\model\DatabaseConnection.php";

?>

<!DOCTYPE html>
<html>

<body style="background-image: url('background.jpg');">
</body>
</html>

<?php 
$validateradio="";
$validatecheckbox="";
$Code="";

if(isset($_POST["submit"]))
{
$Name=$_REQUEST["name"]; 
$Username=$_REQUEST["uname"]; 
$Email=$_REQUEST["email"]; 
$Password=$_REQUEST["pass"];
$Phone=$_REQUEST["phone"];
$Address=$_REQUEST["address"];

$Date = date('Y-m-d', strtotime($_POST['dob']));
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
  
$target_File="../File/".$_FILES["fileupload"]["name"];

    if($target_File=="../File/")
    {
    $target_File="../File/default_pic.png";
    }
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You have uploadede a new file";
   #echo "br".$_FILES(["fileupload"]["type"]);
    #echo "<img src='".$target_File."'>";
}
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result= $connection->InsertData($conobj,"buyer_reg",$Name,$Username,$Email,$Password,$Phone,$Address,$Date,$validateradio,$target_File);
   if($result)
   {
    header("location: ../view/mlogin.php");
    }
   
    $connection->CloseCon($conobj);

}

?>
