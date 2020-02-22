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
        $calleVendedor = $_POST['calleVendedor'];
        $numeroVendedor = $_POST['numeroVendedor'];
        $coloniaVendedor = $_POST['coloniaVendedor'];
        $cpVendedor = $_POST['cpVendedor'];
        $municipioVendedor = $_POST['municipioVendedor'];
        $estadoVendedor = $_POST['estadoVendedor'];
        // $nomFotoVendedor = $_POST['nombreVendedor'];
        $fotoVendedor = $_FILES['fotoVendedor']['name'];
        $ruta = $_FILES['fotoVendedor']['tmp_name'];
        $destino =  "images/".$fotoVendedor;
        copy($ruta,$destino);


        $sql = "INSERT INTO vendedores(nombre, apellidos, correo, telefono, calle, numero, colonia, cp,
                                        municipio, estado, foto) 
                VALUES('$nombreVendedor', '$apellidoVendedor', '$emailVendedor', '$telefonoVendedor',
                        '$calleVendedor', '$numeroVendedor', '$coloniaVendedor', '$cpVendedor', 
                        '$municipioVendedor', '$estadoVendedor', '$destino')";

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