
<!DOCTYPE html>
<html>
	<body>
		<?php
            <h1><s>Introduzca todos los datos del usuario a eliminar</s></h1>
            <form action="./db/users/db_users_delete.php " method="post">
                <label for="user_id">Id de usuario</label></br>
                <input type="text"id="user_id" name="user_id"></br>
                <label for="user_name">Nombre: </label></br>
                <input type="text" id="user_name" name="user_name"></br>
                <label for="user_surname">Apellidos: </label></br>
                <input type="text" id="user_surname" name="user_surname"></br>
                <label for="user_dni">D.N.I.: </label></br>
                <input type="text" id="user_dni" name="user_dni"></br>
                <label for="user_mail">Email: </label></br>
                <input type="text" id="user_mail" name="user_mail"></br>
                <label for="user_state">Estado del usuario: </label></br>
                <input type="text" id="user_state" name="user_state"></br>
                <label for="message"><s>¿Está seguro de eliminar a este usuario?</s></label>
                <input type="submit" value="Enviar" id="submit" name="submit">
            </form>
        ?>
    </body>
</html>