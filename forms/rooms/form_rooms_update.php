<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca lod datos de la habitación a modificar</s></h1>
            <form action="/db/rooms/db_rooms_update.php " method="post">
                <label for="room_number">Número de habitación: </label></br>
                <input type="text" id="room_number" name="room_number"></br>
                <label for="room_category">Categoría de la habitación: </label></br>
                <input type="text" id="room_category" name="room_category"></br>
                <label for="room_price">Precio de la habitación: </label></br>
                <input type="text" id="room_price" name="room_price"></br>
                <label for="room_state">Estado de la habitación: </label></br>
                <input type="text" id="room_state" name="room_state"></br>
                <label for="message"><s>¿Ha comprobado que los datos sean correctos?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit"> 
            </form>
        ?>
    </body>
</html>