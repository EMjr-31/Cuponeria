<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <?php
        include './Vista/cabecera.php'
    ?>
</head>
<body>
    <?php   
        include './Vista/menu.php';
        /*Estos datos vienen al darle login o registrarse por primera vez*/
        $id_cliente='CT001';
        $nombre=$_POST['nombre'];
        $identificacion_cliente=$_POST['identificacion_cliente'];
        $fechanacimiento_cliente=$_POST['fechanacimiento_cliente'];
        $correo_usuario=$_POST['correo_usuario'];
        $contraseña_usuario=$_POST['contraseña_usuario'];

        /*Variables que se llenaran al ejecutarse sobre las compras de cliente*/
        $fecha_compra_ventas='12-04-2023';
        $estado_canje_ventas=true;
        $titulo_cupon='mar de vida spa';
        $precio_oferta_cupon='19.00';
        $descripccion='¡Paga $19 en Lugar de $60 por 2 Masajes Relajantes + 2 Masajes de Piedras Calientes + 2 Masajes Craneofacial + 2 Reflexologías!';

    ?>
    <div class="movies_section layout_padding">
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>DUI</th>
                        <th>Correo</th>
                        <th>Cupon</th>
                        <th>Fecha Compra</th>
                        <th>Precio</th>
                        <th>PDF</th>
                    </tr>
                </thead>
                <?php
                    for ($i=0; $i < 3; $i++) { 
                ?>
                <tr>
                    <td><?php echo $nombre.$i; ?></td>
                    <td><?php echo $identificacion_cliente.$i; ?></td>
                    <td><?php echo $correo_usuario; ?></td>
                    <td><?php echo $titulo_cupon.$i.$i.$i; ?></td>
                    <td><?php echo $fecha_compra_ventas; ?></td>
                    <td><?php echo $precio_oferta_cupon+$i; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="nombre" value="<?php echo $nombre.$i; ?>">
                            <input type="hidden" name="identificacion_cliente" value="<?php echo $identificacion_cliente.$i; ?>">
                            <input type="hidden" name="correo_usuario" value="<?php echo $correo_usuario; ?>">
                            <input type="hidden" name="titulo_cupon" value="<?php echo $titulo_cupon.$i.$i.$i; ?>">
                            <input type="hidden" name="precio_oferta_cupon" value="<?php echo $precio_oferta_cupon+$i; ?>">
                            <input type="hidden" name="descripccion" value="<?php echo $i.$descripccion; ?>">
                            <input type="hidden" name="fecha_compra_ventas" value="<?php echo $fecha_compra_ventas; ?>">
                            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente.$i; ?>">
                            <input type="submit" name="agregar" id="agregar" value="Generar" class="btn-primary" />
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <thead>
                    <tr>
                        <th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
    <?php
        include './Vista/footer.php'
    ?>
</body>
</html>