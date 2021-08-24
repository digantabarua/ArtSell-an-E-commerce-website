<?php
    require_once '../../models/database.php';

    function editDeliGuy($id, $mobile, $email, $address)
    {
        $query="UPDATE delivery_guy SET mobile='$mobile',email='$email',address='$address' WHERE d_id='$id'";
		
		execute($query);
        header("Location:../../views/DeliveryGuy/home.php");
		
    }
    
    function editSecurity($id, $security)
    {
        $query="UPDATE login SET ans='$security' WHERE id='$id'";
		
        execute($query);
        header("Location:../../views/Admin/editprofile.php");
		
    }
    
    function getDeliGuy($id)
	{
		$query="SELECT * FROM delivery_guy WHERE d_id='$id'";
		$deliGuy=get($query);
		return $deliGuy[0];
    }

    function getUser($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$user=get($query);
		return $user[0];
    }

    function updatePassword($id, $pass)
    {
        $query="UPDATE login SET password='$pass' WHERE id='$id'";
		
        execute($query);
        header("Location:../../views/login.php");
		
    }

    function insertDeliGuy($a_id, $name, $mobile, $email, $address, $age, $dob, $gender, $status)
	{
		
		$query="INSERT INTO delivery_guy VALUES('$a_id','$name','$mobile','$email','$address','$age','$dob','$gender','$status')";
		execute($query);
		
	}

    function getAllInfo()
	{
		$query ="SELECT * FROM delivery_info WHERE delivery_status='undone'";
		$cms = get($query);
		return $cms;	
    }

    function getAllInfoD()
	{
		$query ="SELECT * FROM delivery_info WHERE delivery_status='done'";
		$cms = get($query);
		return $cms;	
    }

    function updateDeli($deli_id,$stat)
    {
        $query="UPDATE delivery_info SET delivery_status='$stat' WHERE di_id='$deli_id'";
		
        execute($query);

    }

    function getAllInfos()
	{
		$query ="SELECT * FROM delivery_guy where status = 'active'";
		$cms = get($query);
		return $cms;	
    }

    function deleteDeliGuy($id)
    {
        $query="UPDATE delivery_guy SET status='inactive' WHERE d_id='$id'";
		
		execute($query);
	}
   
    
?>