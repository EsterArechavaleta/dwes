<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$customer_name=$_POST['customer_name'];
            $customer_surname=$_POST['customer_surname'];
			$customer_dni=$_POST['customer_dni'];
			$customer_mail=$_POST['customer_mail'];
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="IF var_date_in<var_date_out THENSELECT room_number
            FROM `048rooms` 
            WHERE `room_number` NOT IN (SELECT room_number FROM 048_room_reservations WHERE date_in<'$date_out'  AND date_out>'$date_in');
            END IF ";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

			foreach ($048rooms as $room){
				echo $room['room_number'];
				echo '<br>';
			}

		?>
	</body>
</html>