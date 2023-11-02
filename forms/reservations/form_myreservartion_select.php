<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca sus datos para consultar su/s reserva/s</s></h1>
            <form action="./db/reservations/db_my_reservation_select.php" method="post">
                <label for="user_name">Nombre: </label></br>
                <input type="text" id="user_name" name="user_name"></br>
                <label for="user_surname">Apellidos: </label></br>
                <input type="text" id="customer_surname" name="customer_surname"></br>
                <label for="user_dni">D.N.I.: </label></br>
                <input type="text" id="user_dni" name="user_dni"></br>
                <label for="user_email">Email: </label></br>
                <input type="text" id="user_email" name="user_email"></br>
                <label for="reservation_state">Estado de la reserva: </label></br>
                <input type="text" id="reservation_state" name="reservation_state"></br>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>