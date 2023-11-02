<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca los datos de inicio de sesión</s></h1>
            <form action="./db/users/db_users_login.php " method="post">
                <label for="online_user">Usuario: </label></br>
                <input type="text" id="online_user" name="online_user"></br>
                <label for="online_pswrd">Contraseña: </label></br>
                <input type="text" id="online_pswrd" name="online_pswrd"></br>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>