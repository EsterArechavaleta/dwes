<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$room_number=$_POST['room_number'];
			$room_category=$_POST['room_category'];
            $room_price=$_POST['room_price'];
			$room_status=$_POST['room_status'];
			$room_state=$_POST['room_state'];

			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="DELETE room_number, room_category, room_price, room_status, room_state
            FROM `048rooms` 
            WHERE `room_number` = $room_number";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

		?>
	</body>
</html>