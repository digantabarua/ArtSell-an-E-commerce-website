
<?php
session_start();
include "..\model\DatabaseConnection.php";
include('../control/updatecheck.php');
$User="";
$radio1=$radio2=$radio3="";
$FullName=$Email=$Phone=$Address=$Date=$photo="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowBuyerData($conobj,"buyer_reg",$_SESSION["User"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FullName=$row["FullName"];
      $Email=$row["Email"];
      $Phone=$row["Phone"];
      $Address=$row["Address"];
      $photo=$row["File_Path"];

      if(  $row["Gender"]=="female" )
      {
           $radio1="checked"; 
      }

      else if($row["Gender"]=="male")
      {
           $radio2="checked"; 
    }
      else
      {
          $radio3="checked";
      }


  } 
}



?>
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
<body >

<form action='' method='post'   enctype="multipart/form-data">
  <table> 

    <tr><td>  Email </td>
    <td><input type="text" name="Email" value="<?php echo $Email;?>"> </td> </tr>
   
    <tr>
      <td>FullName : </td>
   <td> <input type='text' name='FullName' value="<?php echo $FullName; ?>" ><br><br></td></tr>
   <tr>
      <td>Phone : </td>
      <td> <input type='text' name='Phone' value="<?php echo $Phone; ?>" > <br><br></td></tr>

      <tr>
      <td>Address : </td>
       <td> <textarea rows="3" cols="40" name="Address" value='<?php echo $Address;?>'><?php echo $Address;?> </textarea> <br><br> </td>
</tr>
  
      <tr>
      <td>Gender:</td>
     <td><input type='radio' name='gender' value='female'<?php echo $radio1; ?>> <h4 style="background-color:white;">Female </h4>
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> > <h4 style="background-color:white;">Male </h4>
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > <h4 style="background-color:white;">Other   </h4></td>  </tr> <br><br>
   
     <div class="mydiv"><img src="<?php echo $photo; ?>"  alt="" class="class1-img" width=15%;></div>
    
     <tr><td>
     <input name='update' type='submit' value='Update'>  
     <input name='Delete' type='submit' value='Delete Customer'>
</td></tr>
     <?php// echo $error; ?>
</div>
</body>
</html>