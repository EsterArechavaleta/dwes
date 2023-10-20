<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos de la habitación a eliminar</s></h1>
            <form action="./db/rooms/db_rooms_delete.php " method="post">
                <label for="room_number">Número de habitación: </label></br>
                <input type="text" id="noom_number" name="oom_number"></br>
                <label for="room_category">Categoría de habitación: </label></br>
                <input type="text" id="room_category" name="room_category"></br>
                <label for="room_state">Estado de la habitación: </label></br>
                <input type="text" id="room_state" name="room_state"></br>
                <label for="message"><s>¿Está seguro de eliminar esta habitación?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>