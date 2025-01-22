<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->usuario = $this->model('usuario');
    }

    public function index()
    {
        if (isset($_SESSION['logueado']))
        {
            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);

            if ($datosPerfil) {
                $datosRed = [
                    'usuario' => $datosUsuario,
                    'perfil' => $datosPerfil
                ];
    
                $this->view('pages/home' , $datosRed);
            } else {
                $this->view('pages/perfil/completarPerfil' , $_SESSION['logueado']);
            }

            
        }else {
            redirection('/home/login');
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosLogin = [
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena'])
            ];

            $datosUsuario = $this->usuario->getUsuario($datosLogin['usuario']);

            var_dump($datosUsuario);

            if ($this->usuario->verificarContrasena($datosUsuario , $datosLogin['contrasena'])){
                $_SESSION['logueado'] = $datosUsuario->idusuario;
                $_SESSION['usuario'] = $datosUsuario->usuario;
                redirection('/home');
            }else {
                $_SESSION['errorLogin'] = 'El usuario o la contraseña son incorrectas';
                redirection('/home/login');
            }
        }else {
            if(isset($_SESSION['logueado'])) {
                redirection('/home');
            }else {
                $this->view('pages/login');
            }
        }
    }


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosRegistro = [
                'privilegio' => '2',
                'email' => trim($_POST['email']),
                'usuario' => trim($_POST['usuario']),
                'contrasena' => password_hash(trim($_POST['contrasena']) , PASSWORD_DEFAULT)
              
            ];

          if ($this->usuario->verificarUsuario($datosRegistro)) {
            if ($this->usuario->register($datosRegistro)) {
                $_SESSION['registerComplete'] = 'Te registraste exitosamente';
                $_SESSION['usuario'] = $datosRegistro['usuario'];
                redirection('/home/login');
                
            }else {

            }
          }else {
            $_SESSION['usuarioError'] = 'El usuario no esta disponible';
            $this->view('pages/register', $datosRegistro);
          }

        }else {
            if(isset($_SESSION['logueado'])) {
                redirection('/home');
            }else {
                $this->view('pages/register');
            }
            
        }
    
    }

    public function insertarRegistrosPerfil()
    {
        $carpeta = 'C:/xampp/htdocs/redsocial/public/img/imagenesPerfil/';
        opendir($carpeta);
        $rutaImagen = 'img/imagenesPerfil/' . $_FILES['imagen']['name'];
        $ruta = $carpeta . $_FILES['imagen']['name'];
        copy($_FILES['imagen']['tmp_name'] , $ruta);

        $datos = [
            'idusuario' => trim($_POST['id_user']),
            'nombre' => trim($_POST['nombre']),
            'ruta' => $rutaImagen
        ];

        if ($this->usuario->insertarPerfil($datos)) {
            redirection('/home');
        }else {
            echo 'el perfil no se ha guardado';
        }
    }

    public function logout()
    {
        session_start();

        $_SESSION = [];

        session_destroy();

        redirection('/home');
    }
    
}