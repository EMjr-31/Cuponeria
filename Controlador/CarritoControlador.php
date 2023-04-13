<?php

use Svg\Tag\Path;

require_once 'Controlador.php';
require_once './Modelo/CuponModelo.php';
class CarritoControlador extends Controlador{

    private $model;

    function __construct(){
        $this->model=new CuponModelo();
    }

    public function comprar(){
        $this->render("carrito.php");
    }
    public function generar(){
        $this->render("generar.php");
    }
    
    public function abrirPdf($archivo){
        $objeto="<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <!-------- LINK de CSS -------->
            <link rel=\"stylesheet\" href=\"styles.css\">
            <!----------------------------->
            <title>Visualizador PDF</title>
            <style>
            *{
                /* Eliminar predeterminados */
                margin: 0;
                padding: 0;
            }
            
            .title {
                /* Estilos de título h1 */
                text-align: center;
                padding: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            
            .pdfview {
                /* Centrado */
                margin: auto;
                display: block;
                /* Tamaño */
                width: 850px;
                height: 100vh;
                /* Mejorar aspecto */
                border-radius: 20px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            </style>
        </head>
        <body>
            <!-- Título -->
            <h1 class=\"title\">Visualizador de Cupon</h1>
            <!-- title -->
            <object class=\"pdfview\" type=\"application/pdf\" data=\"".PATH."/Vista/pdfDoc/".$archivo."\" style=\" .pdfview {
                /* Centrado */
                margin: auto;
                display: block;
                /* Tamaño */
                width: 850px;
                height: 100vh;
                /* Mejorar aspecto */
                border-radius: 20px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }\"></object>
            <!-- Aprende más sobre object tag: https://www.w3schools.com/tags/tag_object.asp -->
            <!-- Puede usarse tanto archivos PDF en la Web o locales -->
        </body>
        </html>";
        echo $objeto;
    }
}