<?php
    // Conexion a la base de datos
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $schema = 'registro';

    $conexion = mysqli_connect($host, $user, $pass, $schema);

    // Comprobar si la conexion es correcta
    if (mysqli_connect_errno()) {
        echo "La conexion a la base de datos ha fallado: ".mysqli_connect_errno();
    } 
    else {
        echo "conexion realizada correctamente.";
    }
    // Insertar en la base de datos
    $query = "INSERT INTO lista_visitantes(
        nombre,
        apellidos, 
        edad,
        email,
        pass
    )
    VALUES(
        'Alvaro',
        'Silva Caballero',
        46,
        'alvarosc2@gmail.com',
        '67jkjduhg'
    );";
    $resultado = mysqli_query($conexion, $query);
    
    
    