
<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos a modificar del cliente</s></h1>
            <form action="./db/customers/db_customers_update.php " method="post">
                <label for="customer_id">Id del cliente: </label></br>
                <input type="text" id="customer_id" name="customer_id"></br>
                <label for="customer_name">Nombre: </label></br>
                <input type="text" id="customer_name" name="customer_name"></br>
                <label for="acustomer_surname">Apellidos: </label></br>
                <input type="text" id="acustomer_surname" name="customer_surname"></br>
                <label for="ustomer_dni">D.N.I.: </label></br>
                <input type="text" id="customer_dni" name="customer_dni"></br>
                <label for="customer_mail">Email: </label></br>
                <input type="text" id="customer_mail" name="customer_mail"></br>
                <label for="customer_state">Estado del cliente: </label></br>
                <input type="text" id="customer_state" name="customer_state"></br>
                <label for="message"><s>¿Ha comprobado que los datos sean correctos?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>