<?php

class house_model {
    public function modificarPropietarioInquilino ($idHouse, $user_agency_modify, $user_proprietary_modify, $user_renter_modify){

        $urlPatchUsersHouse = BASE_URL."house/".$idHouse;

        $dataChange = array(
            'userAgencyId' => $user_agency_modify,
            'userProprietaryId' => $user_proprietary_modify,
            'userRenterId' => $user_renter_modify
        );

        $ch = curl_init($urlPatchUsersHouse);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataChange));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
}
