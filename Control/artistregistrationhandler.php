<?php 


$uname = $fname = $email = $phone = $address = $pass = $cpass = $dob =  $gender = "";
$flag = 1;
$unameErr = $fnameErr = $emailErr = $phoneErr = $addressErr = $passErr = $cpassErr = $dobErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["uname"]))
    {
        $unameErr = "Username cannot be empty";
        $uname = "";
        $flag = 0;
    }
    
    else if(ord($_POST["uname"]) < 65 or ord($_POST["uname"]) > 122)
    {
        $unameErr = "First Letter must be an alphabetic character";
        $uname = "";
        $flag = 0;
    }
    else if(!ctype_alnum($_POST["uname"]))
    {
        $unameErr = "Invalid Username!";
        $uname = "";
        $flag = 0;
    }
    
    else
    {
        $uname = test_input($_POST["uname"]); 
    }

    if (empty($_POST["fname"]))
    {
        $fnameErr = "Name cannot be empty";
        $fname = "";
        $flag = 0;
    }
    else if(str_word_count($_POST["fname"])< 2)
    {
        $fnameErr = "Name must contain atleast 2 words";
        $fname = "";
        $flag = 0;
    }
    else if (!preg_match("/^[a-zA-Z-.' ]*$/",$_POST["fname"])) 
    {
        $fnameErr = "Only letters white space, period & dash allowed";
        $fname = "";
        $flag = 0;
    }
    else
    {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
        $email = "";
        $flag = 0;
    }       
    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
    {
        $emailErr = "Invalid email format";
        $email = "";
        $flag = 0;
    }
    else
    {
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["phone"]))
    {
        $phoneErr ="Cannot be empty";
        $phone = "";
        $flag = 0;
    }
    else if(!preg_match("/^[0-9]{11}+$/", $_POST["phone"]))
    {
        $phoneErr ="Invalid Phone Number";
        $phone = "";
        $flag = 0;
    }
    else
    {
        $phone = test_input($_POST["phone"]);
    }

    if(empty($_POST["address"]))
    {
        $addressErr = "Address cannot be empty";
        $address = "";
        $flag = 0;
    }
    else if(!preg_match("/[A-Za-z0-9\-\\,.]+/", $_POST["address"]))
    {
        $addressErr = "Invalid Address";
        $address = "";
        $flag = 0;
    }
    else
    {
        $address = test_input($_POST["address"]);
    }

    if(empty($_POST["pass"])) 
    {
        $passErr = "Password is required";
        $pass = "";
        $flag = 0;
    }
    else if(strlen($_POST["pass"])<8)
    {
        $passErr = "Password must be 8 charecters";
        $pass = "";
        $flag = 0;
    }
    else if(!preg_match("/[@,#,$,%,!]/",$_POST["pass"]))
    {
        $passErr = "Password must contain at least one of the special characters (@, #, $,%,!)";
        $pass = "";
        $flag = 0;
    }
    else
    {
        $pass = test_input($_POST["pass"]);
        if(empty($_POST["cpass"]))
        {
            $cpassErr = "Retype the Password";
            $cpass = "";
            $flag = 0;
        }
        else if (strcmp($pass, $_POST["cpass"])==1)
        {
            $cpassErr = "Password & Retyped Password Dosen't Match";
            $cpass = "";
            $flag = 0;
        }
        else
        {
            $cpass = test_input($_POST["cpass"]);
        }
    }

    $gender = test_input($_POST["gender"]);

    if(!isset($_POST['dob']))
    {
        $dobErr = "Date of birth can't be blank";
        $flag = 0;
    }
    else if(!strtotime($_POST['dob']))
    {
        $dobErr = "Invalid Date of Birth";
        $flag = 0;
    }
    else
    {
        $dob = test_input($_POST["dob"]);
    }

    

}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 
if (isset($_POST['submit']) && $flag==1) {
	$data['uname'] = $uname;
	$data['fname'] = $fname;
	$data['email'] = $email;
	$data['phone'] = $phone;
    $data['address'] = $address;
    $data['pass'] = $pass;
    $data['gender'] = $gender;
    $data['dob'] = $dob;
	
    if(file_exists('../Content/artistregister.json'))
 		{
 			$current_data = file_get_contents('../Content/artistregister.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                 'uname'=>$_POST['uname'],
                 'fname'=>$_POST['fname'],
                 'email'=>$_POST['email'],
                 'phone'=>$_POST['phone'],
                 'address'=>$_POST['address'],
                 'pass'=>$_POST['pass'],
                 'gender'=>$_POST['gender'],
                 'dob'=>$_POST['dob'] 
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('../Content/artistregister.json', $final_data))  
            {  
               
                   
                
            }  
        }  
        else  
        {  
            echo 'Access Denied!'; 
        }  


    

}




?>