<?php

spl_autoload_register(function ($clase){        
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/MVC/Modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/MVC/Modelos/$clase.class.php";    


        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/MVC/Controladores/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/MVC/Controladores/$clase.class.php";        
    });

    require_once "util/funciones.php";