<?php
    $servidor = "localhost";
    $nombreUsuario = "root";
    $password = "";
    $db = 'compra-venta';
    
    $conexion = new mysqli($servidor, $nombreUsuario, $password, $db);
    
    if ($conexion->connect_error) {
        die("conexion fallida" . $conexion->connection_error);
    }

    $username = $_POST['username'];
    $contrasena = $_POST['password'];

    $query = mysqli_query($conexion, "SELECT * FROM usuarios  WHERE correo = '".$username."' and contrasena ='".$contrasena."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1) {
        header("Location: index.php");
    } else if ($nr == 0) {
        header("Location: login.html");
        
    }
?>