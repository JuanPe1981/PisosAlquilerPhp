<?php
require "models/register_house_model.php";
class register_house_controler {

    public static function register_house($direccion, $codigo_postal, $ciudad, $latitud, $longitud, $agencia, $propietario, $inquilino ){
        $_modelo = new register_house_model();
        $_direccion = $direccion;
        $_codigo_postal = $codigo_postal;
        $_ciudad = $ciudad;
        $_latitud = $latitud;
        $_longitud = $longitud;
        $_imagen = null;
        $_agencia = $agencia;
        $_propietario = $propietario;
        $_inquilino = $inquilino;


        $_modelo->register($_direccion, $_codigo_postal, $_ciudad, $_latitud, $_longitud, $_imagen, $_agencia, $_propietario, $_inquilino );
        $registroCorrecto = "Casa registrada correctamente";
        header('location:' . URLSITE . "/?page=register_house&registrado=" . $registroCorrecto);
    }

    public static function validacion(){
        $direccion = trim($_POST['txtdireccion']);
        $codigo_postal = trim($_POST['txtpostal']);
        $ciudad = trim($_POST['txtciudad']);
        $latitud = trim($_POST['txtlatitud']);
        $longitud = trim($_POST['txtlongitud']);
        $agencia = $_SESSION['_usuario']['idUser'];
        $propietario = trim($_POST['txtpropietario']);
        $inquilino = trim($_POST['txtinquilino']);

        $errores = [];
        $i= 0;

        $modelo = new register_house_model();

        if ($direccion == null){
            $errores[$i] = "El campo dirección no puede estar vacio";
            $i = $i+1;
        }

        if ($codigo_postal == null){
            $errores[$i] = "El campo codigo postal no puede estar vacio";
            $i = $i+1;
        }

        if ($ciudad == null){
            $errores[$i] = "El campo ciudad no puede estar vacio";
            $i = $i+1;
        }

        if ($latitud == null){
            $errores[$i] = "El campo latitud no puede estar vacio";
            $i = $i+1;
        }

        if ($longitud == null){
            $errores[$i] = "El campo longitud no puede estar vacio";
            $i = $i+1;
        }


        $_resultadoAgencia = $modelo->comprobarUsuario($agencia);
        if ($_resultadoAgencia['code'] === 404){
            $errores[$i] = "El usuario agencia no existe";
            $i = $i+1;
        }

        $_resultadoPropietario = $modelo->comprobarUsuario($propietario);
        if ($_resultadoPropietario['code'] === 404){
            $errores[$i] = "El usuario propietario no existe";
            $i = $i+1;
        }

        $_resultadoInquilino = $modelo->comprobarUsuario($inquilino);
        if ($_resultadoInquilino['code'] === 404){
            $errores[$i] = "El usuario inquilino no existe";
            $i = $i+1;
        }

        if (count($errores) > 0){
            $errores = serialize($errores);
            $errores = urldecode($errores);
            header('location:' . URLSITE . "/?page=register_house&errores=" . $errores);
        } else {
            self::register_house($direccion, $codigo_postal, $ciudad, $latitud, $longitud, $agencia, $propietario, $inquilino);
        }
    }
}
