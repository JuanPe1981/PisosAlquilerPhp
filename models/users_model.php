<?php

class users_model {

    public function verusuarios() {

        $urlUsers = BASE_URL.'user';
        $ch = curl_init($urlUsers);
        curl_setopt($ch, CURLOPT_URL, $urlUsers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $users = json_decode($result, true);

        return $users;
    }

    public function verusuario($idUser) {

        $urlUser = BASE_URL.'user/'.$idUser;
        $ch = curl_init($urlUser);
        curl_setopt($ch, CURLOPT_URL, $urlUser);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $user = json_decode($result, true);

        return $user;
    }

}
