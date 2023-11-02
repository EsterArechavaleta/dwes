<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$reservation_number=$_POST['reservation_number'];
			$date_in=$_POST['date_in'];
            $date_out=$_POST['date_out'];
			$user_id=$_POST['user_id'];
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql = 
			"SELECT reservation_number,date_in, date_out
            FROM `048reservations`"
			WHERE user_id = $user_id;
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

			foreach ($048reservations as $reservation){
				echo $reservation_number['reservation_number'];
				echo '<br>';
				echo $date_in['date_in'];
				echo '</br>';
				echo $date_out['date_out'];
			}
		?>
	</body>
</html>