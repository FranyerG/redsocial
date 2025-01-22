<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';




?>

<div class="container-home">
    <div class="row">
        <!--Columna perfil-->
        <div class="col-md-3">
            <div class="perfil">
                <div class="perfil-usuario-main">
                    <div class="background-usuario-main"></div>
                    <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil?>" alt="" class="image-user">           
                    <div class="foto-separation"></div>
                    <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datos['usuario']->usuario?>"><div class="text-center nombre-perfil"><?php echo $datos['perfil']->nombreCompleto ?></div></a>
                    <div class="tabla-estadisticas">
                        <a href="#">Publicaciones <br> 0 </a>
                        <a href="#">Me gustas <br> 0 </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Columna principal-->

        <div class="col-md-6">
            <div class="container-style-main">
                <div class="container-usuario-publicar">
                    <a  href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datos['usuario']->usuario?>"><img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil?>" alt="" class="image-border"></a>
                    <form class="" action="">
                        <textarea name="post" id="" class="publicar" placeholder="Que estas pensando?" required></textarea>
                        <hr>
                        <div class="image-upload-file">
                            <div class="upload-photo">
                                <div class="input-file">
                                    <label class="subir-imagen">
                                        <img src="<?php echo URL_PROJECT ?>/img/file-earmark-image.svg" alt=" "class="image-public">
                                        <input type="file" name="imagen" id="imagen"/>
                                    </label>
                                </div>
                                <span class="span-1-1">Subir foto</span>
                            </div>
                            <button class="btn btn-outline-secondary">Publicar</button>
                        </div>
                    </form>
                </div>
                <div class="container-usuarios-publicaciones">

                </div>
            </div>
        </div> 
        
        

        <div class="col-md-3"></div>
    </div>
</div>




<?php

include_once URL_APP . '/views/custom/footer.php';

?>