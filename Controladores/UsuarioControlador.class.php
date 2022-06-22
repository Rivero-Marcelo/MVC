<?php 



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
    
    if($acceso = $u -> VerificarCredenciales()){
    
        SeteoDeSesion($u);
        require "Vistas/Principal.Vista.php";   
    
    }else 
            header("Location: /MVC/index2.php?aut=0");

}



}



