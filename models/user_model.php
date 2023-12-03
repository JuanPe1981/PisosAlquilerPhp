<?php

class user_model {
    public function modificarDatosUsuario ($idUser, $direccion_modify, $telefono_modify){

        $urlPatchUserData = BASE_URL."user/data/".$idUser;

        $dataChange = array(
            'addressUser' => $direccion_modify,
            'phoneNumber' => $telefono_modify
        );

        $ch = curl_init($urlPatchUserData);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataChange));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
}
