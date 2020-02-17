<?php
$servidor = "localhost";
$nombreUsuario = "root";
$password = "";
$db = 'compra-venta';

$conexion = new mysqli($servidor, $nombreUsuario, $password, $db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Home</title>
</head>

<body>
    <div class="container active" id="container">
        <header class="header">
            <div class="contenedor-logo">
                <button id="btn-menu" class="btn-menu"><i class="fas fa-bars"></i></button>
            </div>

            <div class="logo">
                <button class="btn-logo"><i class="fas fa-home"></i></i></button>
                <a href="#" class="logo-title"><span>INMOBILIARIA</span></a>
            </div>

            <div class="cerrar-sesion">
                <button id="btn-close" class="btn-close"><i class="fas fa-sign-out-alt"></i></button>
            </div>
        </header>

        <nav class="menu">
            <a href="#" id="btn-compraVenta"><i class="fas fa-shopping-cart"></i>Compra/Venta de Propiedades</a>
            <hr>
            <a href="#" id="btn-compradores"><i class="fas fa-wallet"></i>Compradores</a>
            <hr>
            <a href="#" id="btn-vendedores"><i class="fas fa-users"></i>Vendedores</a>
            <hr>
            <a href="#"><i class="fas fa-book-open"></i>Reportes Mensuales</a>
            <hr>
            <a href="#"><i class="fas fa-money-check-alt"></i>Pagos Mensuales</a>
        </nav>
        
        <main class="main">

            <div class="compraVenta compraVenta-active" id="compraVenta">

                <div class="compra">
                    <div class="card">
                        <div class="imagen">
                            <i class="fas fa-shopping-cart compraLogo"></i>
                        </div>
                        <div class="titulo">
                            COMPRAS
                        </div>
                        <button class="btn-compraVentas" id="btn-compraVentas-Compras">Ver</button>
                    </div>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal">
                    <!-- Modal contenido -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div>
                </div>

                <div class="venta">
                    <div class="card">
                        <div class="imagen">
                            <i class="fas fa-wallet compraLogo"></i>
                        </div>
                        <div class="titulo">
                            VENTAS
                        </div>
                        <button class="btn-compraVentas" id="btn-compraVentas-Ventas">Ver</button>
                    </div>
                </div>

                <!-- Modal Venta-->
                <div id="myModalVenta" class="modal">
                    <!-- Modal contenido -->
                    <div class="modal-content">
                        <span class="close" id="closeVentas">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div>
                </div>
            </div>

            <div class="compradores compradores-active" id="compradores">
                <h1 class="titulo-compradores">COMPRADORES </h1>
                <hr>
                <button class="btn-add" id="btn-add">Agregar Nuevo</button>

                <form action="compradores.php" class="form form-active" id="form" method="POST">
                    <input type="text" placeholder="Nombre(s)" id="nombre" name="nombre">
                    <input type="text" placeholder="Apellidos" id="apellido" name="apellido">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <input type="text" placeholder="Telefeno" id="telefono" name="telefono">
                    <button type="submit" id="btn-agregarComprador" name="btn-agregarComprador" class="btn-agregarComprador">Guardar</button>
                </form>
                <hr>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                    </tr>
                    <?php
                    $sqlCompradores = "SELECT * from compradores";
                    $resultsCompradores = mysqli_query($conexion, $sqlCompradores);

                    while ($mostrarCompradores = mysqli_fetch_array($resultsCompradores)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrarCompradores['nombre'] ?></td>
                            <td><?php echo $mostrarCompradores['apellidos'] ?></td>
                            <td><?php echo $mostrarCompradores['email'] ?></td>
                            <td><?php echo $mostrarCompradores['telefono'] ?></td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
                <hr>
            </div>

            <div class="vendedores vendedores-active" id="vendedores">
                <h1 class="titulo-vendedor">VENDEDORES </h1>
                <hr>
                <button class="btn-addVendedores" id="btn-addVendedores">Agregar Nuevo</button>

                <form action="vendedores.php" class="formVendedor formVendedor-active" id="formVendedor" method="POST">
                    <input type="text" placeholder="Nombre(s)" id="nombreVendedor" name="nombreVendedor">
                    <input type="text" placeholder="Apellidos" id="apellidoVendedor" name="apellidoVendedor">
                    <input type="email" placeholder="Email" id="emailVendedor" name="emailVendedor">
                    <input type="text" placeholder="Telefeno" id="telefonoVendedor" name="telefonoVendedor">
                    <button type="submit" id="btn-agregarVendedor" name="btn-agregarVendedor" class="btn-agregarVendedor">Guardar</button>
                </form>
                <hr>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                    </tr>
                    <?php
                    $sql = "SELECT * from vendedores";
                    $results = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($results)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['apellidos'] ?></td>
                            <td><?php echo $mostrar['correo'] ?></td>
                            <td><?php echo $mostrar['telefono'] ?></td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
                <hr>
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/80ea51dd3a.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
<?php

?>