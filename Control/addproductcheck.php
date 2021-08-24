<?php
include('../model/art.php');


 $error="";

if (isset($_POST['add'])) {
if (empty($_POST['aname']) || empty($_POST['adesc']) || empty($_POST['acate'])|| empty($_POST['aprice'])|| empty($_FILES['aimage']['name'])|| empty($_POST['artistname'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$imageLocation="../files/". $_FILES["aimage"]["name"];
$userQuery=$connection->AddProduct($conobj,"art",$_POST['aname'],$_POST['adesc'],$_POST['acate'],$_POST["aprice"],$imageLocation,$_POST['artistname']);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["aimage"]["tmp_name"], $imageLocation)) {
        ?>
        <script>
        alert("Art uploaded Successful");
        </script>
        <?php
    } else {
        ?>
     <script>
     alert("Sorry, data was not uploaded.");
     </script>
     <?php
    
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
