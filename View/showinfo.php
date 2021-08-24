<?php
include('../model/db.php');
session_start(); 

?>

<!DOCTYPE html>
<html>
<body>
<center>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["uname"];?></h3>
<br/>Your Profile Page.

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"artist");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th> <br><br> <th>Email</th>  <th>Password</th>  <th>Address</th>  <th>Phone</th>  <th>Gender</th>  <th>DateofBirth</th> </tr>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr> <td>".$row["fullname"]."</td> <br><br> <td>".$row["email"]."</td>  <td>".$row["password"]."</td>  <td>".$row["address"]."</td>  <td>".$row["phone"]."</td>  <td>".$row["gender"]."</td>  <td>".$row["dob"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  ?>
  <a href="../updateindex.php">Edit profile </a><br>
  <a href="../View/artistdashboard.php">Back </a><br>
<a href="../Control/logout.php"> logout</a><br>

</center>