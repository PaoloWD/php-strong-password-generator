<?php

function generatePassword($length, $repeat, $letters, $number, $symbol) {
    $password = '';
    $numbers = '23456789';
    $lowercase = 'abcdefghijkmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $special = '@#][]!"£$%&/()=';
    $possiblePassword = "";
    if ((!$letters && !$number && !$symbol)) {
        $possiblePassword = $lowercase . $uppercase . $numbers .$special;
    }
    
    if ($letters) {
        $possiblePassword .= $lowercase . $uppercase;
    }

    if (($number)) {
        $possiblePassword .= $numbers;
    }

    if (($symbol)) {
        $possiblePassword .= $special;
    }
    if ($repeat==="Sì") {
        $i = 0;
        while ($i < $length) {
            $char = substr($possiblePassword, rand(0, strlen($possiblePassword)-1), 1);
            if (!strstr($password, $char)) {
                $password .= $char;
                $i++;
            }
        }
        

    }else{
        $i = 0;
        while ($i < $length) {
            $char = substr($possiblePassword, mt_rand(0, strlen($possiblePassword)-1), 1);
            $password .= $char;
            $i++;
        }
    }
    
    return $password;
}
?>