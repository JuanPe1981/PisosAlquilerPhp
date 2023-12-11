<?php
class register_house_model {

    public function register($direccion, $codigo_postal, $ciudad, $latitud, $longitud, $imagen, $agencia, $propietario, $inquilino) {

        $nueva_casa = array(
            'addressHouse' => $direccion,
            'postalCodeHouse' => $codigo_postal,
            'cityHouse' => $ciudad,
            'latitudeHouse' => $latitud,
            'longitudeHouse' => $longitud,
            'imagen' => $imagen,
            'userAgency' => $agencia,
            'userProprietary' => $propietario,
            'userRenter' => $inquilino
        );
        $url = BASE_URL . 'house';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($nueva_casa));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, 1);
        $respuesta = curl_exec($ch);

        curl_close($ch);
    }

    public function comprobarUsuario ($usuario) {

        $urlComprobarUsuario = BASE_URL. 'user/' . $usuario;
        $ch = curl_init($urlComprobarUsuario);
        curl_setopt($ch, CURLOPT_URL, $urlComprobarUsuario);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $user = json_decode($result, true);

        return $user;
    }
}