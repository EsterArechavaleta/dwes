<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$reservation_number=$_POST['reservation_number'];
			$date_in=$_POST['date_in'];
            $date_out=$_POST['date_out'];
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql = 
			"SELECT reservation_number
            FROM `048reservations`";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

			foreach ($048reservations as $reservation){
				echo $reservation_number['reservation_number'];
				echo '<br>';
			}
		?>
	</body>
</html>