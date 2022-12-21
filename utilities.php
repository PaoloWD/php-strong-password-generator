<?php
function generatePassword($length) {
    $password = '';
    $numbers = '23456789';
    $lowercase = 'abcdefghijkmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $possiblePassword = $lowercase . $uppercase .$numbers;
    $i = 0;
    while ($i < $length) {
        $char = substr($possiblePassword, mt_rand(0, strlen($possiblePassword)-1), 1);
        if (!strstr($password, $char)) {
            $password .= $char;
            $i++;
        }
    }
    return $password;
}
?>