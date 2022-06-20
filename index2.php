<?php

require "util/autoload.php";



if($_POST){

//    UsuarioControlador::Alta();


UsuarioControlador::Login();



}else


// require "Vistas/FormAltaUsuario.Vista.php";

require "Vistas/FormLogin.Vista.php";


