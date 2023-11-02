<?php

?>
<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <form action="servicio.php" method="post">
        <label for="nombre">Confirme su nombre</label></body></br></br>
        <input type="text" id="nombre" name="nombre"></br></br>
        <label for="apellido">Confirme su apellido</label></br></br>
        <input type="text" id="apellido" name="apellido"></br></br>
        <label for="mail">Confirme su E-Mail</label></br></br>
        <input type="text" id="mail" name="mail"></br></br></br>
        <textarea rows="10" cols="60" name="consulta" placeholder="Describa brevemente su consulta"></textarea></br></br></br>
        <input type="submit" value="Enviar" id="submit" name="submit">

    </form>
    
</body>
</html>