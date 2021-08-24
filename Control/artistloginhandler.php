<?php 

$uname = $pass = "";
$flag = 1;
$unameErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["uname"]))
    {
        $unameErr = "Username cannot be empty";
        $uname = "";
        $flag = 0;
    }

    else if(!SearchUser($_POST["uname"]))
    {
        $unameErr = "Username Doesn't Exist";
        $uname = "";
        $flag = 0;   
    }

    else
    {
        $uname = test_input($_POST["uname"]); 
        if(empty($_POST["pass"])) 
        {
            $passErr = "Password is required";
            $pass = "";
            $flag = 0;
        }

        else if(VerifyPassword($_POST["uname"]) != $_POST["pass"])
        {
            $passErr = "Wrong Password! Try Again";
            $pass = "";
            $flag = 0;
        }

        else
        {
            $pass = test_input($_POST["pass"]);
        }
    }

    
}

function SearchUser($name)
{
    $json = file_get_contents('../Content/artistregister.json');
    $json_data = json_decode($json,true);
    foreach ($json_data as $key => $value) 
    {
        if($json_data[$key]["uname"] == $name)
        {   
          return true;   
        }
    }

    return false;
}

function VerifyPassword($name)
{
    $json = file_get_contents('../Content/artistregister.json');
    $json_data = json_decode($json,true);
    foreach ($json_data as $key => $value) 
    {
        if($json_data[$key]["uname"] == $name)
        {   
           return $json_data[$key]["pass"];
        }
    }

    return "";
}
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



if (isset($_POST['login']) && $flag==1) {
	
    $_SESSION["uname"] = $uname;

    header("location:artistdashboard.php");;

}



?>