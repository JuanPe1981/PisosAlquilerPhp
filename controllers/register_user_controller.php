<?php
require "models/register_user_model.php";
class register_user_controler {

    public static function register_user($usuario, $password, $nombre, $apellido, $direccion, $telefono, $admin){
        $_modelo = new register_user_model();
        $_usuario = $usuario;
        $_password = $password;
        $_nombre = $nombre;
        $_apellido = $apellido;
        $_direccion = $direccion;
        $_telefono = $telefono;
        $_admin = $admin;

        $_resultado = $_modelo->register($_usuario,$_password,$_nombre,$_apellido,$_direccion,$_telefono, $_admin);

        if ($_resultado == true) {
            $registroCorrecto = "Usuario registrado correctamente";
            header('location:' . URLSITE . "/?page=register_user&registrado=" . $registroCorrecto);
        } else {
            $registroError = "Usuario no ha podido registrarse";
            header('location:' . URLSITE . "/?page=register_user&registrado=" . $registroError);
        }

    }

    public static function validacion(){
        $usuario = trim($_POST['txtusuario']);
        $password = trim($_POST['txtpassword']);
        $nombre = trim($_POST['txtnombre']);
        $apellido = trim($_POST['txtapellido']);
        $direccion = trim($_POST['txtdireccion']);
        $telefono = trim($_POST['txttelefono']);
        $admin = false;

        $errores = [];
        $i= 0;

        $modelo = new register_user_model();

        if ($nombre == null){
            $errores[$i] = "El campo nombre no puede estar vacio";
            $i = $i+1;
        }

        if ($apellido == null){
            $errores[$i] = "El campo apellido no puede estar vacio";
            $i = $i+1;
        }

        if ($direccion == null){
            $errores[$i] = "El campo fecha de nacimiento no puede estar vacio";
            $i = $i+1;
        }

        if ($telefono == null){
            $errores[$i] = "El campo correo electronico no puede estar vacio";
            $i = $i+1;
        }

        if ($usuario == null){
            $errores[$i] = "El campo usuario no puede estar vacio";
            $i = $i+1;
        }


        $result = $modelo->comprobarUsuario($usuario);
        if ($result['userName'] == $usuario){
            $errores[$i] = "El usuario ya existe intentalo con otro nombre de usuario";
            $i = $i+1;
        }


        if ($password == null){
            $errores[$i] = "El campo password no puede estar vacio";
            $i = $i+1;
        }

        if (count($errores) > 0){
            $errores = serialize($errores);
            $errores = urldecode($errores);
            header('location:' . URLSITE . "/?page=register_user&errores=" . $errores);
        } else {
            self::register_user($usuario,$password,$nombre,$apellido,$direccion,$telefono,$admin);
        }
    }
}
