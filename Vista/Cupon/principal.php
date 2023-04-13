<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <?php
        include './Vista/cabecera.php'
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
    ?>
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner_taital">Cupones <br>Siempre lo mejor para este 2023</div>
                    <p class="banner_text">¡Tenemos muchas ofertas, no dejes que se te escapen! </p>
                    <div class="see_bt"><a href="<?=PATH?>/Cupon">Ver Cupones</a></div>
                </div>
                <div class="col-md-6">
                  <div class="play_icon"><a href="<?=PATH?>/Cupon"><img src="<?=PATH?>/Vista/assets/img/menu/play-icon.png"></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Las Empresas que pagan por publicidad VIP -->
    <div class="arrival_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-4">
                  <div class="image_1">
                     <h2 class="jesusroch_text">L U D E  M E L</h2>
                     <p class="movie_text">Especialistas en Belleza</p>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-4">
                  <div class="image_2">
                     <h2 class="jesusroch_text">D E N T O P O L I S</h2>
                     <p class="movie_text">Tu Mejor Sonrrisa</p>
                  </div>
               </div>
               <div class="col-sm-8 col-lg-4">
                  <h1 class="arrival_text">EMPRESAS VIP</h1>
                  <div class="movie_main">
                     <div class="mins_text_1">Más de</div>
                     <div class="mins_text">150 Review´s</div>
                     <div class="mins_text">Positivas</span></div>
                  </div>
                  <p class="long_text">Conoce a las empresas con los mejores descuentos y envíos accesibles a todo el país.</p>
                  <div class="rating_main">
                     <div class="row">
                        <div class="col-sm-6 col-lg-6">
                           <div class="icon_2"><img src="<?=PATH?>/Vista/assets/img/menu/icon-2.png"><span class="padding_10">4.6 de Calificación</span></div>
                        </div>
                     </div>
                  </div>
                  <div class="paly_bt"><a href="<?=PATH?>/Empresa">Conocelas</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- resumen de algunos cupones -->
      <div class="movies_section layout_padding">
         <div class="container">
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Cupones de Cuidado Personal</h2>
               <div class="seemore_bt"><a href="<?=PATH?>/Cupon">Ver Más</a></div>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                     <!-- Seccion de galeria-->
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0001.jpg" class="image" style="width:100%">
                           <div class="middle">
                              <a href="<?=PATH?>/Cupon"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text">Mar de Vida</h1>
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
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0004.jpg" class="image" style="width:100%">
                           <div class="middle">
                              <a href="<?=PATH?>/Cupon"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text">Lude Mel</h1>
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
                     <!--Fin de la galeria-->
                  </div>
               </div>
            </div>
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Cupones de Comida</h2>
               <div class="seemore_bt"><a href="<?=PATH?>/Cupon">Ver Más</a></div>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                     <!-- Seccion de galeria-->
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0003.jpg" class="image" style="width:100%">
                           <div class="middle">
                           <a href="<?=PATH?>/Cupon"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text">Don Li</h1>
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
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0006.jpg" class="image" style="width:100%">
                           <div class="middle">
                           <a href="<?=PATH?>/Cupon"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text">Comida Gorda</h1>
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
                     <!--Fin de la galeria-->
                  </div>
               </div>
            </div>
            <div class="movies_section_2 layout_padding">
               <h2 class="letest_text">Cupones Variados</h2>
               <div class="seemore_bt"><a href="<?=PATH?>/Cupon">Ver Más</a></div>
               <div class="movies_main">
                  <div class="iamge_movies_main">
                     <!-- Seccion de galeria-->
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0011.jpg" class="image" style="width:100%">
                           <div class="middle">
                           <a href="<?=PATH?>/Cupon"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text">Multi Servicios A-W</h1>
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
                     <div class="iamge_movies">
                        <div class="image_3">
                           <img src="<?=PATH?>/Vista/assets/img/cupones/IMG0019.jpg" class="image" style="width:100%">
                           <div class="middle">
                           <a href="<?=PATH?>/Cupon"><div class="playnow_bt">Ver Oferta</div></a>
                           </div>
                        </div>
                        <h1 class="code_text">Medical Biologic</h1>
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
                     <!--Fin de la galeria-->
                  </div>
               </div>
            </div>
            <div class="seebt_1"><a href="<?=PATH?>/Cupon">Ver más</a></div>
         </div>
      </div>
      <!-- Final del resumen de cupones actuales -->
      <!-- Otro acceso al login -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <h1 class="newsletter_text">Inicia Sesión para Comprar</h1>
            <div class="box_main">
               <p class="dummy_text">Login</p>
               <div class="mail_main">
                  <input type="text" class="email_text" placeholder="Ingrese su correo para iniciar sesión" name="Enter Your email">
                  <div class="right_arrow">
                     <a href="#"><img src="<?=PATH?>/Vista/assets/img/menu/right-arrow.png"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
    <?php
        include './Vista/footer.php'
    ?>
</body>
</html>