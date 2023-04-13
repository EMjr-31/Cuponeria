<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="logo" href="<?=PATH?>/Vista/Principal/index.php"><img src="<?=PATH?>/Vista/assets/img/menu/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=PATH?>/Cupon/principal">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=PATH?>/Cupon">Cupones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=PATH?>/Empresa">Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Canjear Cupones</a>
                </li>
            </ul>
        <div class="search_icon"><a href="<?=isset($_SESSION['login_data'])?PATH."/Usuario/perfil":PATH."/Usuario/login"?>"><img src="<?=PATH?>/Vista/assets/img/menu/user-icon.png"><span class="padding_left_15"><?=isset($_SESSION['login_data'])?"Perfil":"login"?></span></a></div>
        <?php if(isset($_SESSION['login_data'])){
        ?>
        <div class="search_icon"><a href="<?=PATH?>/Usuario/logout"><img src="<?=PATH?>/Vista/assets/img/menu/eye-icon.png"><span class="padding_left_15">Cerrar sesion</span></a></div>
        <?php }?>
        </div>
    </nav>
</div>