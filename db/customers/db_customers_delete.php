<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$customer_id=$_POST['customer_id'];
            $customer_name=$_POST['customer_name'];
			$customer_surname=$_POST['customer_surname'];
			$customer_dni=$_POST['customer_dni'];
			$customer_mail=$_POST['customer_mail'];
			$customer_state=$_POST['customer_state'];
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="DELETE customer_id, customer_name, customer_surname, customer_dni, customer_mail, customer_state
            FROM `048customers` 
            WHERE `customer_id` = $customer_id";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

		?>
	</body>
</html>