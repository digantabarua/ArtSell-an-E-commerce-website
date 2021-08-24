<?php
		require '../../controllers/buyerController.php';

		$key=$_GET["key"];
	
		$buyers = searchCustomer($key);
?>

<table>
	<?php
	
			foreach($buyers as $buyer)
                            {
                              
                                echo "<tr>";
                                echo "<td>".$buyer["b_id"]."</td>";
                                echo "<td>".$buyer["name"]."</td>";
                                echo "<td>".$buyer["mobile"]."</td>";
                                echo "<td>".$buyer["email"]."</td>";
                                echo "<td>".$buyer["address"]."</td>";
                                echo "<td>".$buyer["age"]."</td>";
                                echo "<td>".$buyer["dob"]."</td>";
                                echo "<td>".$buyer["gender"]."</td>";
                               
                                echo "</tr>";
                             
                                
                            }
		
	?>
</table>