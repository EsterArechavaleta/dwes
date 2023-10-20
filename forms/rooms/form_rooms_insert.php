<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos de la nueva habitación</s></h1>
            <form action="/db/rooms/db_rooms_insert.php " method="post">
                <label for="room_number">Número de habitación: </label></br>
                <input type="text" id="room_number" name="room_number"></br>
                <label for="room_category">Categoría de la habitación: </label></br>
                <input type="text" id="room_category" name="room_category"></br>
                <label for="room_price">Precio de la habitación: </label></br>
                <input type="text" id="room_price" name="room_price"></br>
                <label for="room_state">Estado de la habitación: </label></br>
                <input type="text" id="room_state" name="room_state"></br>
                <label for="room_status">Estatus de la habitación: </label></br>
                <input type="text" id="room_status" name="room_status"></br>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>