<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$reservation_number=$_POST['reservation_number'];
			$date_in=$_POST['date_in'];
            $date_out=$_POST['date_out'];
			$reservation_status=$_POST['reservation_status'];
			$rr_customer_id=$_POST['rr_customer_id'];
			$rr_room_number=$_POST['rr_room_number'];
			$reservation_state=$_POST['reservation_state'];

			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="DELETE reservation_number, date_in, date_out, reservation_status, rr_customer_id, rr_room_number, reservation_state
            FROM `048reservations` 
            WHERE `reservation_number` = $reservation_number";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

		?>
	</body>
</html>