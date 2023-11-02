<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$room_number=$_POST['room_number'];
            $room_category=$_POST['room_category'];
			$room_price=$_POST['room_price'];

			
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="INSERT INTO 048rooms (room_number, room_category, room_price, room_status, room_state)
			VALUES (default, $croom_number, $room_category, $croom_price, ******,  active ";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);
		?>
	</body>
</html>