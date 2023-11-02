<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca el id del usuario que desea eliminar: </s></h1>
            <form action="./forms/users/form_users_delete.php " method="post">
                <label for="user_id">Id del cliente:</label></br>
                <input type="text" id="user_id" name="user_id"></br>
                
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>