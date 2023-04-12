<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Cupon</title>
    <?php
        include '../cabecera.php'
    ?>
</head>
<body>
    <?php
        include '../menu.php';
        $precio_oferta_cupon=19;
        $precio_regular_cupon=60;
        $descuento=(1-($precio_oferta_cupon/$precio_regular_cupon))*100;
        $ahorro=$precio_regular_cupon-$precio_oferta_cupon;
        $cantidad=0;
        $descripccion="¡Paga $19 en Lugar de $60 por 2 Masajes Relajantes + 2 Masajes de Piedras Calientes + 2 Masajes Craneofacial + 2 Reflexologías!";
        
    ?>
        <div class="cooming_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_17">
                            <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0001.jpg" class="image" style="width:100%">
                        </div>
                    </div>
                        <form class="col-md-6" action="<?=PATH?>/Vista/Carrito/carrito.php" method="post">
                            <h1 class="Cooming_soon_taital">Mar de Vida</h1>
                            <div class="movie_main">
                                <div class="mins_text_1">Valor $ <?php echo number_format($precio_oferta_cupon,'2','.',',');?></div>           
                                <div class="mins_text_1">Descuento <?php echo number_format($descuento,'0','.',',').'%';?></div>
                                <div class="mins_text_1">Ahorras $ <?php echo number_format($ahorro,'2','.',',');?></div>
                            </div>
                            <p class="long_text"><?php echo $descripccion;?></p>
                            <div class="col-md-6">
                            <div class="mins_text_precio">Valor $ <?php echo number_format($precio_oferta_cupon,'2','.',',');?></div>
                                <div class="movie_main">
                                    <div class="mins_text_precio">Cantidad </div>
                                    <select class="mins_text_cantidad" name="cantidad" id="cantidad">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="precio_oferta_cupon" value="<?php echo $precio_oferta_cupon; ?>">
                            <input type="hidden" name="descripccion" value="<?php echo $descripccion; ?>">
                            <div class="paly_bt">
                                <input type="submit" name="agregar" id="agregar" value="Comprar" class="botonAgr" />
                            </div>
                        </form>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-lg-12">
                    <br>
                    <div class="mins_text_1">Condiciones:</div>
                    <p class="long_text_recomendacion">* Último día para usar el cupón: 15 de mayo del 2023</p>
                    <p class="long_text_recomendacion">* Máximo 3 cupones de cada tipo</p>
                    <p class="long_text_recomendacion">* Debe llevar impreso el cupón para poderlo canjear en tienda</p>
                    <p class="long_text_recomendacion">* Realizar la reservación con 24 horas de anticipación</p>
                    <p class="long_text_recomendacion">* Propina no incluida</p>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include '../footer.php'
    ?>
</body>
</html>