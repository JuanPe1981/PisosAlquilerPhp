<?php

function verifyUser ($user_name, $password){
    $urlLogin = URL_SITE . 'user/login?userName=' . $user_name . '&password=' . $password;

}
