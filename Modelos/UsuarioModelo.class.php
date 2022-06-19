<?php

require "util/autoload.php";


class UsuarioModelo extends BDModelo{

public $id;
public $username;
public $password;



public function __construct($id=""){

    parent::__construct();

    if($id != ""){   
        $this->id = $id;
        $this->ObtenerPorID();
    }
}


public function ObtenerPorID() {
    
    $sql = "SELECT * FROM mvc_usuarios WHERE id = " . $this->id;
    $fila = $this-> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];
    $this -> id = $fila['id'];
    $this -> username = $fila['username'];

}


public function Guardar()
{
    if($this -> id == null){     
    $this->Insertar();
    }else $this->Actualizar();
}


private function Insertar(){
   
    $sql = "INSERT INTO mvc_usuarios (username, password) VALUES ('" . $this->username . "', '" . $this -> passwordHash($this -> password) . "')";
    $this -> conexion -> query($sql);
}


private function Actualizar()
{


}


private function passwordHash($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}







    
}
