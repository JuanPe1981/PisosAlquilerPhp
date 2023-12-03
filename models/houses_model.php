<?php

class houses_model {

    public function vercasas() {

    $urlHouses = BASE_URL.'house';
    $ch = curl_init($urlHouses);
    curl_setopt($ch, CURLOPT_URL, $urlHouses);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    $houses = json_decode($result, true);

    return $houses;
    }

    public function deletehouse ($idhouse) {

        $urlDelete = BASE_URL.'house/'.$idhouse;
        $ch = curl_init($urlDelete);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response_delete = curl_exec($ch);
        curl_close($ch);
    }

    public function vercasa($idHouse) {

        $urlHouse = BASE_URL.'house/'.$idHouse;
        $ch = curl_init($urlHouse);
        curl_setopt($ch, CURLOPT_URL, $urlHouse);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $house = json_decode($result, true);

        return $house;
    }

}
