<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include './Vista/cabecera.php'
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
        /*movies_section  cooming_section*/
    ?>
    <div class="movies_section_login layout_padding">
        <div class="layout_padding">
        
            <form class="form-login" action="<?=PATH?>/Usuario/inicioSesion" method="post">
                <h5>Inicio de Sesión</h5>
                <?php
                        if(isset($errores)){
                            if(count($errores)>0){
                                echo "<div class='alert alert-danger'><ul>";
                                foreach ($errores as $error) {
                                    echo "<li>$error</li>";
                                }
                                echo "</ul></div>";

                            }
                        }

                   ?>
                <input class="controls" type="email" name="correo_usuario" value="" placeholder="Correo">
                <input class="controls" type="password" name="contrasenia_usuario" value="" placeholder="Contraseña">
                <input class="buttons" type="submit" name="login" value="Ingresar">
            </form>
            <section class="form-cuenta">
                <h4>¿No tienes una cuenta?</h4>
                <div class="see_buttons"><a href="<?=PATH?>/Vista/Usuarios/registro.php">Registrarse</a></div>
            </section>
        </div>
    </div>
    <?php
        include './Vista/footer.php'
    ?>
</body>
</html>