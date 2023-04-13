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
        $nombre=$_SESSION['login_data']['nombre'];
        $identificacion_cliente=$_SESSION['login_data']['identificacion_cliente'];
        $correo_usuario=$_SESSION['login_data']['correo_usuario'];


        /*Variables que se llenaran al ejecutarse sobre las compras de cliente*/
        $fecha_compra_ventas='12-04-2023';
        $estado_canje_ventas=true;
        $titulo_cupon='mar de vida spa';
        $precio_oferta_cupon='19.00';
        $descripccion='¡Paga $19 en Lugar de $60 por 2 Masajes Relajantes + 2 Masajes de Piedras Calientes + 2 Masajes Craneofacial + 2 Reflexologías!';
//var_dump($ventas);
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
                    foreach($ventas as $venta){ 
                ?>
                <tr>
                    <td><?php echo $_SESSION['login_data']['nombre'];?></td>
                    <td><?php echo $_SESSION['login_data']['identificacion_cliente'];?></td>
                    <td><?php echo $_SESSION['login_data']['correo_usuario']?></td>
                    <td><?php echo $venta['id_cupon']; ?></td>
                    <td><?php echo $venta['fecha_compra_ventas']; ?></td>
                    <td><?php echo $venta['precio_oferta_cupon']; ?></td>
                    <td>
                        <form action="<?=PATH."/Carrito/Generar/"?>" method="get">
                        <input type="hidden" name="id_cupon" value="<?php echo $venta['id_cupon']; ?>">
                            <input type="hidden" name="nombre" value="<?php echo $_SESSION['login_data']['nombre'] ?>">
                            <input type="hidden" name="identificacion_cliente" value="<?php echo$_SESSION['login_data']['identificacion_cliente']; ?>">
                            <input type="hidden" name="correo_usuario" value="<?php echo $_SESSION['login_data']['correo_usuario']; ?>">
                            <input type="hidden" name="titulo_cupon" value="<?php echo  $venta['titulo_cupon'];?>">
                            <input type="hidden" name="precio_oferta_cupon" value="<?php echo $venta['precio_oferta_cupon']; ?>">
                            <input type="hidden" name="descripccion" value="<?php $venta['descripcion_cupon']; ?>">
                            <input type="hidden" name="fecha_compra_ventas" value="<?php echo $venta['fecha_compra_ventas'];  ?>">
                            <input type="hidden" name="id_cliente" value="<?php echo $_SESSION['login_data']['id_cliente'];?>">
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