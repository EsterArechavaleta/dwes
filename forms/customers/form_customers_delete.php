
<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca todos los datos del cliente a eliminar</s></h1>
            <form action="./db/customers/db_customers_delete.php " method="post">
                <label for="customer_id">Id de cliente</label></br>
                <input type="text"id="customer_id" name="customer_id"></br>
                <label for="customer_name">Nombre: </label></br>
                <input type="text" id="customer_name" name="customer_name"></br>
                <label for="customer_surname">Apellidos: </label></br>
                <input type="text" id="customer_surname" name="customer_surname"></br>
                <label for="customer_dni">D.N.I.: </label></br>
                <input type="text" id="customer_dni" name="customer_dni"></br>
                <label for="customer_mail">Email: </label></br>
                <input type="text" id="customer_mail" name="customer_mail"></br>
                <label for="customer_state">Estado del cliente: </label></br>
                <input type="text" id="customer_state" name="customer_state"></br>
                <label for="message"><s>¿Está seguro de eliminar a este cliente?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>