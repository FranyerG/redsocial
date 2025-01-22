<?php

include_once URL_APP . '/views/custom/header.php';



?>

<div class="container-center center login row mb-3">
    <div class="container-content center">
        <div class="content-action center">
            <h4>Iniciar Sección</h4>               
            <form action="<?php echo URL_PROJECT ?>/home/login" method="POST">
                <input class="form-contro" type="text" name="usuario" placeholder="Usuario" required>
                <input class="form-contro" type="password" name="contrasena" placeholder="Contraseña" required>
                <button class="btn btn-outline-primary">Ingresar</button>
            </form>
            <?php if(isset($_SESSION['errorLogin'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-2 ab-2" role="alert">
                    <?php echo $_SESSION['errorLogin'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php unset($_SESSION['errorLogin']); endif ?>
                <!--registercomplete-->
            <?php if(isset($_SESSION['registerComplete'])) : ?>
                <div class="alert alert-success alert-dismissible fade show mt-2 ab-2" role="alert">
                    <?php echo $_SESSION['registerComplete'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php unset($_SESSION['usuarioError']); endif ?>
            <div class="contenido-link mt-2">
                <span class="mr-2">¿No tienes una cuenta?</span><a href="<?php echo URL_PROJECT ?>/home/register">Registrarme</a>
            </div>
        </div>
        <div class="content-image center">
            <img class="img" src="<?php echo URL_PROJECT?>/img/otaku.png" alt="Logo de la Red">
        </div>
    </div>
</div>





<?php

include_once URL_APP . '/views/custom/footer.php';
?>

