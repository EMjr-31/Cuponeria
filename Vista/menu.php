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
        <div class="search_icon"><a href="<?=PATH?>/Usuario/login"><img src="<?=PATH?>/Vista/assets/img/menu/user-icon.png"><span class="padding_left_15"><?=isset($_SESSION['login_data'])?"Perfil":"login"?></span></a></div>
        <div class="search_icon"><a href="#"><img src="<?=PATH?>/Vista/assets/img/menu/eye-icon.png"><span class="padding_left_15">Carrito</span></a></div>
        <div class="search_icon"><a href="#"><img src="<?=PATH?>/Vista/assets/img/menu/search-icon.png"><span class="padding_left_15">Ofertas...</span></a></div>
        </div>
    </nav>
</div>