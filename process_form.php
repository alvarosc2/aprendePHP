<?php
    // Conexion a la base de datos
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $schema = 'registro';

    $mysqli = new mysqli($host, $user, $pass, $schema);

    // Comprobar si la conexion es correcta
    if (mysqli_connect_errno()) {
        echo "La conexion a la base de datos ha fallado: ".mysqli_connect_errno();
    } 
    else {
        echo "Conexion realizada correctamente.";
    }

    // Insertar en la base de datos
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $stmt = $mysqli->prepare("INSERT INTO lista_visitantes(
        nombre,
        apellidos, 
        edad,
        email,
        pass
    )
    VALUES(
        ?,
        ?,
        ?,
        ?,
        ?
    );");
    
    $stmt->bind_param('sssss', $nombre, $apellidos, $edad, $email, $pass);
    
    $stmt->execute();
    $stmt->close();
