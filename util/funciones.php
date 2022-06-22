<?php


function  VerificarSesion(){

    if(session_status() == PHP_SESSION_NONE ){
        echo "NO HAY SESION"; 
        
    }
}

function SeteoDeSesion($u){
    session_start();
    $_SESSION["usuario"] = $u->username;
    $_SESSION["autenticado"] = TRUE;
}