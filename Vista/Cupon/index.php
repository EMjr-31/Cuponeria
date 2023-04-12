<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupones</title>
    <?php
        include './Vista/cabecera.php';
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
    ?>
    <!-- inicio de la galeria de cupones-->
    <div class="movies_section layout_padding">
         <div class="container">
            <!--Menu para filtrar cupones por categoria (opcional dejarlo)-->
            <div class="movies_menu">
               <ul>
                  <li class="active"><a href="#">Tratamiento de Cabello</a></li>
                  <li><a href="#">Cuidado de la Piel</a></li>
                  <li><a href="#">Comida</a></li>
                  <li><a href="#">Higiene Bucal</a></li>
                  <li><a href="#">Hogar</a></li>
               </ul>
            </div>
            <?php 
               $index=0;
               $filas=explode(".",count($cupones)/5);
               $filas= count($filas)==1?$filas[0]:$filas[0]+1;
               for($j=0;$j<$filas;$j++){
             ?>
              <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Letest Movies</h2>
               <div class="seemore_bt"></div>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                    <!-- Seccion de galeria <?=$j;?>-->
                    <?php
                    for($n=0;$n<5;$n++){
                     $cupon=$cupones[$index];
                    ?>
                    <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/<?=$cupon['imagen'];?>" class="image" style="width:100%">
                           <div class="middle">
                           <a href="<?=PATH?>/Cupon/detalles/<?=$cupon['id_cupon']?>"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text"><?=$cupon['titulo_cupon']?></h1>
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
           
           
            <div class="seebt_1"><a href="#">See More</a></div>
         </div>
      </div>
    <?php
        include './Vista/footer.php'
    ?>
</body>
</html>