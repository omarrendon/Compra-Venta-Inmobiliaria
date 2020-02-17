<?php
$servidor = "localhost";
$nombreUsuario = "root";
$password = "";
$db = 'compra-venta';

$conexion = new mysqli($servidor, $nombreUsuario, $password, $db);

if ($conexion->connect_error) {
    die("conexion fallida" . $conexion->connection_error);
}

if (isset($_POST['btn-agregarComprador'])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['email']) >= 1 && strlen($_POST['telefono']) >= 1
    ) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO compradores(nombre, apellidos, email, telefono) 
                VALUES('$nombre', '$apellido', '$email', '$telefono')";

        if ($conexion->query($sql) === true) {
            // echo 'index.html';
            header("Location: index.php");
        } else {
            die("Error al insertar datos: " . $conexion->error);
        }

        $conexion->close();
    } else {
        ?>
            <p>¡Por favor complete los campos!</p>
        <?php
    }
}


?>