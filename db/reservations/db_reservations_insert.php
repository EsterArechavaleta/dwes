<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$date_in=$_POST['date_in'];
            $date_out=$_POST['date_out'];
			$rr_customer_id=$_POST['rr_customer_id'];
			$rr_room_number=$_POST['rr_room_number'];

			
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="INSERT INTO 048reservations (reservation_number, date_in, date_out, reservation_status, rr_customer_id, rr_room_number, reservation_state)
			VALUES (default, $date_in, $date_out, $******, $rr_customer_id, $rr_room_number, active ";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);
		?>
	</body>
</html>