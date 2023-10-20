<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos de la reserva a modificar</s></h1>
            <form action="./db/reservations/db_reservations_update.php " method="post">
                <label for="reservation_number">Número de reserva: </label></br>
                <input type="text" id="reservation_number" name="reservation_number"></br>
                <label for="customer_id">Id del cliente</label></br>
                <input type="text" id="customer_id" name="customer_id">
                <label for="date_in">Fecha de entrada: </label></br>
                <input type="text" id="date_in" name="date_in"></br>
                <label for="date_out">Fecha de salida: </label></br>
                <input type="text" id="date_out" name="date_out"></br>
                <label for="customer_mail">Email: </label></br>
                <input type="text" id="customer_mail" name="customer_mail"></br>
                <label for="reservation_state">Estado de la reserva: </label></br>
                <input type="text" id="reservation_state" name="reservation_state"></br>
                <label for="message"><s>¿Ha comprobado que los datos sean correctos?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>