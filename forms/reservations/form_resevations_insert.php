<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos de la nueva reserva</s></h1>
            <form action="./db/reservations/db_reservation_insert.php " method="post">
                <label for="reservation_number">Número de reserva</label></br>
                <input type="text" id="reservation_number" name="reservation_number"></br>
                <label for="customer_id">Id del cliente</label></br>
                <input type="text" id="customer_id" name="customer_id"></br>
                <label for="date_in">Fecha de entrada: </label></br>
                <input type="text" id="date_in" name="date_in"></br>
                <label for="date_out">Fecha de salida: </label></br>
                <input type="text" id="adate_out" name="adate_out"></br>
                <label for="room_category">Categoría de habitación: </label></br>
                <input type="text" id="room_category" name="room_category"></br>
                <label for="room_price">Precio: </label></br>
                <input type="text" id="room_price" name="room_price"></br>
                <label for="reservation_state">Estado de la reserva: </label></br>
                <input type="text" id="reservation_state" name="reservation_state"></br>
                <label for="reservation_status">Estatus de la reserva: </label></br>
                <input type="text" id="reservation_status" name="reservation_status"></br>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>