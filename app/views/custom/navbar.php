<header>
    <div class="container-2">
        <nav class="navbar navbar-expand-lg navbar-light text-white">
            <a class="navbar-brand" href="<?php echo URL_PROJECT?>/home"><img src="<?php echo URL_PROJECT ?>/img/otaku.png" alt="Logo" class="image-logo"></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                        <form action="" class="tipe-form form-inline my-2 my-lg-0 buscador">
                            <input type="text" name="buscar" class="form-style" placeholder="Buscar">
                            <button class="btn-form" type="sutmit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>




                <ul class="navbar-nav ar-auto ">

                    <li class="nav-item inicio">
                        <div class="button-container" id="button1">
                            <a  class="nav-link text-white my-link" href="<?php echo URL_PROJECT?>/home"><span class="big"><img class="nav" with="25px" height="25px" src="<?php echo URL_PROJECT?>/img/img_icons/home.png" alt=""></span></a>
                            <div class="indicator"></div>
                        </div>
                    </li>
                

                <li class="nav-item ">
                <div class="button-container" id="button2">
                <a class="nav-link text-white my-link" href=""><span class="big"><img class="nav" with="25px" height="25px" src="<?php echo URL_PROJECT?>/img/img_icons/usuarios.png" alt=""></span></a>
                <div class="indicator"></div>
                </div>
                </li>

                <li class="nav-item ">
                <div class="button-container" id="button3">
                <a class="nav-link text-white my-link" href=""><span class="big"><img class="nav" with="25px" height="25px" src="<?php echo URL_PROJECT?>/img/img_icons/msg.png" alt=""></span></a>
                <div class="indicator"></div>
                </div>
                </li>

                <li class="nav-item ">
                <div class="button-container" id="button4">
                <a class="nav-link text-white my-link" href=""><span class="big"><img class="nav" with="25px" height="25px" src="<?php echo URL_PROJECT?>/img/img_icons/noti.png" alt=""></span></a>
                <div class="indicator"></div>
                </div>
                </li>

                </ul>





                <div class="dropdown">
                    <span class="btn-radio " id="actionPerfil" onclick="toggleDropdown()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil?>" alt="perfil" class="img-perfil">
                    </span>
                     <div class="dropdown-content" id="myDropdown" aria-labelledby="actionPerfil">
                        <a href="#">Perfil</a>
                        <a href="#">Configuración</a>
                        <a class="dropdown-item text-dark" href="<?php echo URL_PROJECT ?>/home/logout">Salir</a>
                    </div>
                </div>


            </div>
        </nav>
    </div>


</header>  


