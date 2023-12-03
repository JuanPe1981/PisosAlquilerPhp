<?php
class login_model {

    public function login($user, $password){

        $urlLogin = BASE_URL.'user/login?userName='.$user.'&password='.$password;
        $ch = curl_init($urlLogin);
        curl_setopt($ch, CURLOPT_URL, $urlLogin);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $userLogin = json_decode($result, true);

        return $userLogin;

    }

}