<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php
        include './Vista/cabecera.php'
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
    ?>
    <div class="movies_section_login layout_padding_register">
        <div class="">
            <form class="form-register" action="<?=PATH?>/Usuario/insertUsuario" method="post">
                <h4>Formulario Registro</h4>
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
                <input class="controls_register" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                <input class="controls_register" type="text" name="identificacion_cliente" id="identificacion_cliente" placeholder="Ingrese su DUI">
                <input class="controls_register" type="date" name="fechanacimiento_cliente" id="fechanacimiento_cliente" placeholder="Ingrese su DUI">
                <input class="controls_register" type="email" name="correo_usuario" id="correo_usuario" placeholder="Ingrese su Correo">
                <input class="controls_register" type="password" name="contrasenia_usuario" id="contraseña_usuario" placeholder="Ingrese su Contraseña">
                <input class="controls_register" type="password" name="contrasenia_usuario2" id="contraseña_usuario" placeholder="Ingrese su Contraseña">
                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                <input class="buttons" type="submit" value="Registrar" name="registrar">
                <p><a href="<?=PATH?>/Usuario/login">¿Ya tengo cuenta?</a></p>
            </form>
        </div>
    </div>
    <?php
        include './Vista/footer.php'
    ?>
</body>
</html>