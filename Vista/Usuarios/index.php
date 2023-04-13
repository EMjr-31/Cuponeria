<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include '../cabecera.php'
    ?>
</head>
<body>
    <?php
        include '../menu.php';
        /*movies_section  cooming_section*/
    ?>
    <div class="movies_section_login layout_padding">
        <div class="layout_padding">
            <form class="form-login" action="<?=PATH?>/Vista/Usuarios/usuario.php" method="post">
                <h5>Inicio de Sesión</h5>
                <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
                <input class="controls" type="password" name="comntrasena" value="" placeholder="Contraseña">
                <input class="buttons" type="submit" name="" value="Ingresar">
            </form>
            <section class="form-cuenta">
                <h4>¿No tienes una cuenta?</h4>
                <div class="see_buttons"><a href="<?=PATH?>/Vista/Usuarios/registro.php">Registrarse</a></div>
            </section>
        </div>
    </div>
    <?php
        include '../footer.php'
    ?>
</body>
</html>