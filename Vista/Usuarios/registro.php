<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php
        include '../cabecera.php'
    ?>
</head>
<body>
    <?php
        include '../menu.php';
    ?>
    <div class="movies_section_login layout_padding_register">
        <div class="">
            <form class="form-register" action="<?=PATH?>/Vista/Usuarios/usuario.php" method="post">
                <h4>Formulario Registro</h4>
                <input class="controls_register" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                <input class="controls_register" type="text" name="identificacion_cliente" id="identificacion_cliente" placeholder="Ingrese su DUI">
                <input class="controls_register" type="date" name="fechanacimiento_cliente" id="fechanacimiento_cliente" placeholder="Ingrese su DUI">
                <input class="controls_register" type="email" name="correo_usuario" id="correo_usuario" placeholder="Ingrese su Correo">
                <input class="controls_register" type="password" name="contraseña_usuario" id="contraseña_usuario" placeholder="Ingrese su Contraseña">
                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                <input class="buttons" type="submit" value="Registrar">
                <p><a href="<?=PATH?>/Vista/Usuarios/index.php">¿Ya tengo cuenta?</a></p>
            </form>
        </div>
    </div>
    <?php
        include '../footer.php'
    ?>
</body>
</html>