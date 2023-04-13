<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <?php
        include './Vista/cabecera.php'
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
    ?>
        <div class="movies_section layout_padding">
            <div class="container">
                <!--Menu para filtrar cupones por categoria (opcional dejarlo)-->
                <div class="movies_menu">
                    <ul>
                        <li class="active"><a href="#">Empresa</a></li>
                        <li><a href="#">SPA</a></li>
                        <li><a href="#">Cosmetico</a></li>
                        <li><a href="#">Comida</a></li>
                        <li><a href="#">Belleza</a></li>
                        <li><a href="#">Odontologia</a></li>
                        <li><a href="#">. . .</a></li>
                    </ul>
                </div>
            
        <?php
            $index=0;
            $filas=explode(".",count($empresas)/5);
            $filas=4;
            /*$filas= count($filas)==1?$filas[0]:$filas[0]+1;*/
            for($j=0;$j<$filas;$j++){
        ?>
        <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Catalogo de Empresas</h2>
               <div class="seemore_bt"></div>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                    <!-- Seccion de galeria <?=$j;?>-->
                    <?php
                    for($n=0;$n<5;$n++){
                    $empresa=$empresas[$index];
                    ?>
                    <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/empresas/<?=str_replace(' ', '',$empresa['rubro_empresa']).".png";?>" class="image" style="width:100%">
                           <div class="middle">
                           <a href="#"><div class="playnow_bt">Ver Cupones</div></a>
                           </div>
                        </div>
                        <h2 class="code_text">Empresa: <?=$empresa['nombre_empresa']?></h2>
                        <h2 class="code_text">Rubro: <?=$empresa['rubro_empresa']?></h2>
                        <?php
                            $fechacreacion_empresa=$fechacreacion_empresa=strtotime(explode(" ",$empresa['fechacreacion_empresa'])[0]);
                            $fechacreacion_empresa=date("D",$fechacreacion_empresa)." ".date("d",$fechacreacion_empresa)." de ".date("M",$fechacreacion_empresa)." de ".date("Y",$fechacreacion_empresa);
                        ?>
                        <h2 class="code_text">Fecha: <?=$fechacreacion_empresa?></h2>
                        <div class="star_icon">
                           <ul>
                                <?php
                                    for ($i=0; $i < 5; $i++) { 
                                ?>
                                    <li><a href="#"><img src="<?=PATH?>/Vista/assets/img/menu/star-icon.png"></a></li>
                                <?php
                                    }
                                ?>
                           </ul>
                        </div>
                     </div>
                    <?php
                     $index+=1; 
                    }
                    ?>               
                  </div>
               </div>
            </div>
             <?php     
               }
            ?>
            </div>
        </div>
    <?php
            include './Vista/footer.php'
        ?>
</body>
</html>