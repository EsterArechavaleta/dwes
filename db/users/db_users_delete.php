<!DOCTYPE html>
<html>
	<body>
		<?php
			//Create variables
			$user_id=$_POST['user_id'];
			$user_dni=$_POST['user_dni'];
            $user_name=$_POST['user_name'];
			$user_surname=$_POST['user_surname'];
			$user_mail=$_POST['user_mail'];
			$user_tlf=$_POST['user_tlf'];
			$user_state=$_POST['user_state'];
			$online_user=$_POST['online_user'];
			$online_pswrd=$_POST['online_pswrd'];
			
			$conn=mysqli_connect('localhost','root','','hotel3');

			//Execute query
			$sql="DELETE user_id, user_dni, user_name, user_surname, user_mail, user_tlf, user_state,  
            FROM `048user` 
            WHERE `user_id` = $user_id";
			
			$result=mysqli_query($conn, $sql);
			$cars=mysqli_fetch_all($result,MYSQLI_ASSOC);

			mysqli_free_result($result);
			mysqli_close($conn);

		?>
	</body>
</html>