<?php
$servidor = "localhost";
$nombreUsuario = "root";
$password = "";
$db = 'compra-venta';

$conexion = new mysqli($servidor, $nombreUsuario, $password, $db);

if ($conexion->connect_error) {
    die("conexion fallida" . $conexion->connection_error);
}

if (isset($_POST['btn-agregarVendedor'])) {
    if (
        strlen($_POST['nombreVendedor']) >= 1 && strlen($_POST['apellidoVendedor']) >= 1 &&
        strlen($_POST['emailVendedor']) >= 1 && strlen($_POST['telefonoVendedor']) >= 1
    ) {
        $nombreVendedor = $_POST['nombreVendedor'];
        $apellidoVendedor = $_POST['apellidoVendedor'];
        $emailVendedor = $_POST['emailVendedor'];
        $telefonoVendedor = $_POST['telefonoVendedor'];

        $sql = "INSERT INTO vendedores(nombre, apellidos, correo, telefono) 
                VALUES('$nombreVendedor', '$apellidoVendedor', '$emailVendedor', '$telefonoVendedor')";

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