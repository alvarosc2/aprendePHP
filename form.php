<!-- Solo para no perder la info guardo esto aquí -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registrese con nosotros</h1><br>

<form method="POST" action="process_form.php">
    <label for="nombre">Nombre</label><br/>
    <input type="text" name="nombre"><br/>

    <label for="apellidos">Apellidos</label><br/>
    <input type="text" name="apellidos"><br/>

    <label for="edad">Edad</label><br/>
    <input type="text" name="edad"><br/>

    <label for="email">e-mail</label><br/>
    <input type="text" name="email"><br/>

    <label for="pass">Contraseña</label><br/>
    <input type="text" name="pass"><br/>

    <input type="submit" value="Enviar">
</form>
</body>
</html>