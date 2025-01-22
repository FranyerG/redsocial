<header>
    <div class="container-2">
        <nav class="navbar navbar-expand-lg navbar-light text-white">
            <a class="navbar-brand" href="<?php echo URL_PROJECT?>/home"><img src="<?php echo URL_PROJECT ?>/img/otaku.png" alt="Logo" class="image-logo"></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ar-auto ">
                    <li class="nav-item inicio">
                        <a class="nav-link text-white " href="#"><span class="big"><i class="fas fa-home ar-1"></i></span>Inicio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white usuarios" href="#"><span class="big"><i class="fas fa-home ar-1"></i></span>Usuarios</a>
                    </li>
                    <li class="nav-item buscador">
                        <form action="" class="tipe-form form-inline my-2 my-lg-0 ">
                            <input type="text" name="buscar" class="form-style" placeholder="Buscar">
                            <button class="btn-form" type="sutmit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>

                <div class="links">
                    <a class="" href=""><span class="big"><i class="fas fa-envelope"></i></span><span class="mb-0 ml-1">Mensajes</span></a>
                </div>

                <div class="links ">
                    <a class="" href=""><span class="big"><i class="fas fa-bell"></i></span><span class="mb-0 ml-1">Notificaciones</span></a>
                </div>

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



