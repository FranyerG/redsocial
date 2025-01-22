<?php

class Perfil extends Controller
{

    public function __construct()
    {
        $this->perfil = $this->model('perfilUsuario');
        $this->usuario = $this->model('usuario');
    }

    public function index($user)
    {
        if(isset($_SESSION['logueado'])) {

            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);


            $datos = [
                'perfil' => $datosPerfil
            ];

            $this->view('pages/perfil/perfil' , $datos);
        }
        
    }


}