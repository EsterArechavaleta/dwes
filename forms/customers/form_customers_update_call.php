<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca el id del cliente que desea eliminar: </s></h1>
            <form action="./forms/customers/form_customers_update.php " method="post">
                <label for="customer_id">Id del cliente:</label></br>
                <input type="text" id="customer_id" name="customer_id"></br>
                
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>