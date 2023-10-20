<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca el número de reserva que desea eliminar: </s></h1>
            <form action="./forms/reservations/form_reservations_delete.php " method="post">
                <label for="reservation_number">Número de reserva:</label></br>
                <input type="text" id="reservation_number" name="reservation_number"></br>
                
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>