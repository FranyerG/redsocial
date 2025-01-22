<?php

class usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function getUsuario($usuario)
    {
        $this->db->query('SELECT * FROM usuarios WHERE usuario = :user');
        $this->db->bind(':user' , $usuario);
        return $this->db->register();
    }

    public function getPerfil($idusuario)
    {
        $this->db->query('SELECT * FROM perfil WHERE idUsuario = :id');
        $this->db->bind(':id' , $idusuario);
        return $this->db->register();
    }

    public function verificarContrasena($datosUsuario, $contrasena)
    {
        if (password_verify($contrasena , $datosUsuario->contrasena)) {
           return true; 
        }else {
            return false;
        }
    }

    public function verificarUsuario($datosUsuario)
    {
        $this->db->query('SELECT * FROM usuarios WHERE usuario = :usuario');
        $this->db->bind(':usuario' , $datosUsuario['usuario']);
        $this->db->register();
        if ($this->db->rowCount() > 0) {
            return false;
        }else {
            return true;
        }
    }

    public function register($datosUsuario)
    {
        $this->db->query('INSERT INTO usuarios (correo , usuario , contrasena, idPrivilegio) VALUES (:correo, :usuario, :contrasena, :privilegio)');
        $this->db->bind(':privilegio' , $datosUsuario['privilegio']);
        $this->db->bind(':correo' , $datosUsuario['email']);
        $this->db->bind(':usuario' , $datosUsuario['usuario']);
        $this->db->bind(':contrasena' , $datosUsuario['contrasena']);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    public function insertarPerfil($datos)
    {
        $this->db->query('INSERT INTO perfil (idUsuario , fotoPerfil , nombreCompleto ) VALUES (:id , :rutaFoto , :nombre)');
        $this->db->bind(':id' , $datos['idusuario']);
        $this->db->bind(':rutaFoto' , $datos['ruta']);
        $this->db->bind(':nombre' , $datos['nombre']);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }

    }


}