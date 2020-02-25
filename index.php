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
                <form action="closeSession.php" method="POST">
                    <button id="btn-close" name="btn-close" class="btn-close"><i class="fas fa-sign-out-alt"></i></button>
                </form>
            </div>
        </header>

        <nav class="menu">
            <a href="#" id="btn-compraVenta"><i class="fas fa-shopping-cart"></i>Compra/Venta de Propiedades</a>
            <hr>
            <a href="#" id="btn-compradores"><i class="fas fa-wallet"></i>Compradores</a>
            <hr>
            <a href="#" id="btn-vendedores"><i class="fas fa-users"></i>Vendedores</a>
            <hr>
            <a href="#" id="btn-reportes"><i class="fas fa-book-open"></i>Reportes Mensuales</a>
            <hr>
            <a href="#" id="btn-pagos"><i class="fas fa-money-check-alt"></i>Pagos Mensuales</a>
        </nav>

        <main class="main" id="main">

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
                        <div class="tituloCompras">
                            COMPRAS
                        </div>

                        <div class="imgCasaCompra">
                            <?php
                            $sqlImage = "SELECT foto from vendedores";
                            $resultImage = mysqli_query($conexion, $sqlImage);
                            while ($mostarImage = mysqli_fetch_array($resultImage)) {
                            ?>
                                <?php echo '<img src="' . $mostarImage['foto'] . '">' ?>
                                <?php echo '<hr>' ?>
                            <?php

                            }
                            ?>
                        </div>

                        <div class="descriptionCompra">
                            <?php
                            $sqlTextCompra = "SELECT * from vendedores";
                            $resultText = mysqli_query($conexion, $sqlTextCompra);
                            while ($mostrarText = mysqli_fetch_array($resultText)) {
                            ?>
                                <p class="parrafo">
                                    <strong>Antiguo dueño :</strong> <?php echo $mostrarText['nombre'] ?> <?php echo $mostrarText['apellidos'] ?>
                                    <br>
                                    <strong>Telefono :</strong> <?php echo $mostrarText['telefono'] ?>
                                    <br>
                                    <strong>Correo Eléctronico :</strong> <?php echo $mostrarText['correo'] ?>
                                    <br>
                                    <strong>Calle :</strong> <?php echo $mostrarText['calle'] ?> <strong>Número :</strong> <?php echo $mostrarText['numero'] ?>
                                    <br>
                                    <strong>Colonia :</strong> <?php echo $mostrarText['colonia'] ?> <strong>Código Postal:</strong> <?php echo $mostrarText['cp'] ?>
                                    <br>
                                    <strong>Municipio :</strong> <?php echo $mostrarText['municipio'] ?>
                                    <br>
                                    <strong>Esatado :</strong> <?php echo $mostrarText['estado'] ?>
                                </p>
                            <?php
                            }
                            ?>
                        </div>
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
                        <div class="tituloCompras">
                            VENTAS
                        </div>

                        <div class="imgCasaCompra">
                            <?php
                            $sqlImageCompra = "SELECT foto from vendedores";
                            $resultImageCompra = mysqli_query($conexion, $sqlImageCompra);
                            while ($mostarImageCompra = mysqli_fetch_array($resultImageCompra)) {
                            ?>
                                <?php echo '<img src="' . $mostarImageCompra['foto'] . '">' ?>
                                <?php echo '<hr>' ?>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="descriptionCompra">
                            <?php
                            $sqlTextCompra = "SELECT * from compradores";
                            $resultTextCompra = mysqli_query($conexion, $sqlTextCompra);
                            while ($mostrarTextCompra = mysqli_fetch_array($resultTextCompra)) {
                            ?>
                                <p class="parrafo">
                                    <strong>Nuevo Propietario :</strong> <?php echo $mostrarTextCompra['nombre'] ?> <?php echo $mostrarTextCompra['apellidos'] ?>
                                    <br>
                                    <strong>Telefono :</strong> <?php echo $mostrarTextCompra['telefono'] ?>
                                    <br>
                                    <strong>Correo Eléctronico :</strong> <?php echo $mostrarTextCompra['email'] ?>
                                    <br>
                                    <strong>Datos de la Propiedad Comprada</strong>
                                    <br>
                                    <?php echo $mostrarTextCompra['casa'] ?>
                                </p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="compradores compradores-active" id="compradores">
                <h1 class="titulo-compradores">VENTA DE CASAS </h1>
                <hr>
                <button class="btn-add" id="btn-add">Agregar Nuevo</button>

                <form action="compradores.php" class="form form-active" id="form" method="POST">
                    <input type="text" placeholder="Nombre(s)" id="nombre" name="nombre">
                    <input type="text" placeholder="Apellidos" id="apellido" name="apellido">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <input type="text" placeholder="Telefeno" id="telefono" name="telefono">
                    <select name="selectCasa" id="selectCasa">
                        <?php
                        $sqlSelect = "SELECT calle, numero, colonia, cp, municipio, estado from vendedores";
                        $resultSelect = mysqli_query($conexion, $sqlSelect);
                        while ($mostarSelect = mysqli_fetch_array($resultSelect)) {
                        ?>
                            <option value="<?php echo $mostarSelect['calle'];
                                            echo $mostarSelect['numero'];
                                            echo $mostarSelect['colonia'];
                                            echo $mostarSelect['cp'];
                                            echo $mostarSelect['municipio'];
                                            echo $mostarSelect['estado']
                                            ?>">
                                <?php echo 'Calle: ' . $mostarSelect['calle'] . ' Número:';
                                echo $mostarSelect['numero'] . ' Colonia:';
                                echo $mostarSelect['colonia'] . ' CP:';
                                echo $mostarSelect['cp'] . ' ';
                                echo $mostarSelect['municipio'] . ' ';
                                echo $mostarSelect['estado'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <button type="submit" id="btn-agregarComprador" name="btn-agregarComprador" class="btn-agregarComprador">Guardar</button>
                </form>
                <hr>
                <table>
                    <tr>
                        <th>Eliminar</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Casa Adquirida</th>
                    </tr>
                    <?php
                    $sqlCompradores = "SELECT * from compradores";
                    $resultsCompradores = mysqli_query($conexion, $sqlCompradores);

                    while ($mostrarCompradores = mysqli_fetch_array($resultsCompradores)) {
                    ?>
                        <tr>
                            <form action="compradores.php" method="POST" id="eliminarCompradores-<?php echo $mostrarCompradores['id']; ?>">
                                <td>
                                    <button type="submit" id="eliminarCompradores" value="<?php echo $mostrarCompradores['id']; ?>" name="eliminarCompradores"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </form>
                            <td><?php echo $mostrarCompradores['nombre'] ?></td>
                            <td><?php echo $mostrarCompradores['apellidos'] ?></td>
                            <td><?php echo $mostrarCompradores['email'] ?></td>
                            <td><?php echo $mostrarCompradores['telefono'] ?></td>
                            <td><?php echo $mostrarCompradores['casa'] ?></td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
                <hr>
            </div>

            <div class="vendedores vendedores-active" id="vendedores">
                <h1 class="titulo-vendedor">COMPRA DE CASAS </h1>
                <hr>
                <button class="btn-addVendedores" id="btn-addVendedores">Agregar Nuevo</button>

                <form action="vendedores.php" class="formVendedor" id="formVendedor" method="POST" enctype="multipart/form-data">
                    <input type="text" placeholder="Nombre(s)" id="nombreVendedor" name="nombreVendedor">
                    <input type="text" placeholder="Apellidos" id="apellidoVendedor" name="apellidoVendedor">
                    <input type="email" placeholder="Email" id="emailVendedor" name="emailVendedor">
                    <input type="text" placeholder="Telefeno" id="telefonoVendedor" name="telefonoVendedor">

                    <label for="">DATOS DE LA PROPIEDAD</label>
                    <input type="text" placeholder="Calle" id="calleVendedor" name="calleVendedor">
                    <input type="text" placeholder="Número" id="numeroVendedor" name="numeroVendedor">
                    <input type="text" placeholder="Colonia" id="coloniaVendedor" name="coloniaVendedor">
                    <input type="text" placeholder="Código Postal" id="cpVendedor" name="cpVendedor">
                    <input type="text" placeholder="Municipio" id="municipioVendedor" name="municipioVendedor">
                    <input type="text" placeholder="Estado" id="estadoVendedor" name="estadoVendedor">
                    <input type="text" placeholder="Costo Propiedad (MXN)" id="costoVendedor" name="costoVendedor">
                    <input type="text" placeholder="Nombre Clave" name="textoClave" id="textoClave">
                    <label for="">FECHA DE VENTA</label>
                    <input type="date" name="fechaVendedor" id="fechaVendedor">
                    <label for="">IMAGEN DE LA PROPIEDAD</label>
                    <input type="file" id="fotoVendedor" name="fotoVendedor">
                    <button type="submit" id="btn-agregarVendedor" name="btn-agregarVendedor" class="btn-agregarVendedor">Guardar</button>
                </form>
                <hr>
                <div class="scroll">

                    <table>
                        <tr>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Calle</th>
                            <th>Número</th>
                            <th>Colonia</th>
                            <th>CP</th>
                            <th>Municipio</th>
                            <th>Estado</th>
                            <th>Costo</th>
                            <th>Clave</th>
                            <th>Fecha</th>
                            <th>Foto</th>
                        </tr>
                        <?php
                        $sql = "SELECT * from vendedores";
                        $results = mysqli_query($conexion, $sql);

                        while ($mostrar = mysqli_fetch_array($results)) {
                        ?>

                            <tr>

                                <form action="vendedores.php" method="POST" id="eliminarVendedores-<?php echo $mostrar['id']; ?>">
                                    <td>
                                        <button type="submit" id="eliminarVendedores" value="<?php echo $mostrar['id']; ?>" name="eliminarVendedor"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </form>
                                <td><?php echo $mostrar['nombre'] ?></td>
                                <td><?php echo $mostrar['apellidos'] ?></td>
                                <td><?php echo $mostrar['correo'] ?></td>
                                <td><?php echo $mostrar['telefono'] ?></td>
                                <td><?php echo $mostrar['calle'] ?></td>
                                <td><?php echo $mostrar['numero'] ?></td>
                                <td><?php echo $mostrar['colonia'] ?></td>
                                <td><?php echo $mostrar['cp'] ?></td>
                                <td><?php echo $mostrar['municipio'] ?></td>
                                <td><?php echo $mostrar['estado'] ?></td>
                                <td>$<?php echo $mostrar['precio'] ?></td>
                                <td><?php echo $mostrar['clave'] ?></td>
                                <td><?php echo $mostrar['fecha'] ?></td>
                                <td><?php echo '<img src="' . $mostrar['foto'] . '" width="100" heigth="100">' ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <hr>
            </div>

            <div class="reportes reportes-active" id="reportes">
                <h1 class="titulo-vendedor">REPORTES </h1>
                <hr>
                <div class="botonesReportes">
                    <form action="">
                        <label for="">Mes de reporte</label>
                        <select name="reportesOpciones" id="reportesOpciones">
                            <option value="eneroReportes">Enero</option>
                            <option value="febreroReportes" selected>Febrero</option>
                            <option value="marzoReportes">Marzo</option>
                            <option value="abrilReportes">Abril</option>
                            <option value="mayoReportes">Mayo</option>
                            <option value="junioReportes">Junio</option>
                            <option value="julioReportes">Julio</option>
                            <option value="agostoReportes">Agosto</option>
                            <option value="septiembreReportes">Septiembre</option>
                            <option value="octubreReportes">Octubre</option>
                            <option value="noviembreReportes">Noviembre</option>
                            <option value="diciembreReportes">Diciembre</option>
                        </select>
                        <input type="submit" name="btnReportes" value="Buscar">
                    </form>
                </div>
                <hr>
                <div class="contenidoReportes">

                </div>
            </div>

            <div class="pagos pagosActive" id="pagos">

            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/80ea51dd3a.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
<?php

?>