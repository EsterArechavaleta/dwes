<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$user_name=$_POST['user_name'];
            $user_surname=$_POST['user_surname'];
			$user_dni=$_POST['user_dni'];
			$user_mail=$_POST['user_mail'];
			$user_tlf=$_POST['user_tlf'];

			
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="INSERT INTO 048users(user_id, user_dni, user_name, user_surname, user_email, user_tlf, user_state)
			VALUES (default, $user_dni, $user_name, $user_surname, $user_email, $user_tlf, active ";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);
			
		?>
	</body>
</html>