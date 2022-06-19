<?php

require "util/autoload.php";

class UsuarioControlador {


public static function Alta(){
    
    $u = new UsuarioModelo();
    $u -> username = $_POST['username'];
    $u -> password = $_POST['password']; 
    $u -> Guardar();
}



public static function Login(){

    $u = new UsuarioModelo();
    $u -> username = $_POST['username'];
    $u -> password = $_POST['password'];
    $u -> VerificarCredenciales();

}

}