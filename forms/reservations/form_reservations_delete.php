<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos de la reserva a eliminar</s></h1>
            <form action="./db/reservations/db_reservations_delete.php " method="post">
                <label for="reservation_number">Nombre: </label></br>
                <input type="text" id="reservation_number" name="reservation_number"></br>
                <label for="user_name">Nombre: </label></br>
                <input type="text" id="user_name" name="user_name"></br>
                <label for="user_surname">Apellidos: </label></br>
                <input type="text" id="user_surname" name="user_surname"></br>
                <label for="user_dni">Número de DNI: </label></br>
                <input type="text" id="user_dni" name="user_dni"></br>
                <label for="date_in">Fecha de entrada: </label>
                <input type="text" id="date_in" name="date_in"></br> 
                <label for="reservation_state">Estado de la reserva: </label></br>
                <input type="text" id="reservation_state" name="reservation_state"></br>
                <label for="message"><s>¿Está seguro de eliminar esta reserva?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>