<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos para consultar disponibilidad</s></h1>
            <form action="./db/reservations/db_reservations_availability_select.php " method="post">
                <label for="date_in">Fecha de entrada: </label></br>
                <input type="text" id="date_in" name="date_in"></br>
                <label for="date_out">Fecha de salida: </label></br>
                <input type="text" id="date_out" name="date_out"></br>
                <label for="room_category">Categoria de la habitación: </label></br>
                <input type="text" id="room_category" name="room_category"></br>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
	</body>
</html>