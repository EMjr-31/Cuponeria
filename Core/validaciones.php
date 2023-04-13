<?php

//Para ver si el formato del correo es válido
function esCorreo($correo_usuario){
    if(preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',$correo_usuario)) {
        return false;
    } else {
        return "El formato de correo electrónico es inválido.";
    }
}

//Verifica si cumple con el patrón establecido para el DUI
function esDUI($identificacion_usuario){
    if(!preg_match('/^[0-9]{2}-[0-9]{4}-[0-9]{1}$/', $identificacion_usuario)) {
        return "El formato DUI no es el correcto.";
    } else {
        return false;
    }
}

//Verifica que los campos no estén vacios
function esVacio($correo_usuario, $contraseña_usuario){
    if (preg_match('/^$/', $correo_usuario) && preg_match('/^$/', $contraseña_usuario)) {
        return "Los campos de correo y contraseña están vacíos.";
    } elseif (preg_match('/^$/', $correo_usuario)) {
        return "El campo de correo está vacío.";
    } elseif (preg_match('/^$/', $contraseña_usuario)) {
        return "El campo de contraseña está vacío.";
    } else {
        return false;
    }
}

//Verifica que los campos solo admitan texto
function esTexto($var){
    if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $var)){
        return true;
    } else {
        return false;
    }
}


?>

