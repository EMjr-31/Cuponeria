<?php

//Para ver si el formato del correo es válido
function esCorreo($correo_usuario){
    return preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',$correo_usuario);
}

//Verifica si cumple con el patrón establecido para el DUI
function esDUI($identificacion_usuario){
    return !preg_match('/^[0-9]{2}-[0-9]{4}-[0-9]{1}$/', $identificacion_usuario)
}

?>

