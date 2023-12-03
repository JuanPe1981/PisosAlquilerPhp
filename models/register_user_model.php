<?php
class register_user_model {

    public function register($usuario, $password, $nombre, $apellido, $direccion, $telefono, $admin) {

        $nuevo_usuario = array(
            'userName' => $usuario,
            'password' => $password,
            'nameUser' => $nombre,
            'firstName' => $apellido,
            'addressUser' => $direccion,
            'phoneNumber' => $telefono,
            'admin' => $admin
        );
        $url = BASE_URL . 'user';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($nuevo_usuario));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        $respuesta = curl_exec($ch);

        curl_close($ch);

    }

    public function comprobarUsuario ($usuario) {

        $urlComprobarUsuario = BASE_URL.BASE_URL.'user/login/'.$usuario;
        $ch = curl_init($urlComprobarUsuario);
        curl_setopt($ch, CURLOPT_URL, $urlComprobarUsuario);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $user = json_decode($result, true);

        return $user;
    }
}