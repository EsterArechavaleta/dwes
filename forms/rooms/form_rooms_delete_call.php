<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca el número de la habitación que desea eliminar: </s></h1>
            <form action="./forms/rooms/form_rooms_delete.php " method="post">
                <label for="room_number">Número de habitación:</label></br>
                <input type="text" id="room_number" name="room_number"></br>
                
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>