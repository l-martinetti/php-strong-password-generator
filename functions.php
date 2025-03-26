<?php

function get_password() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    if( isset($_GET['password_length']) && is_numeric($_GET['password_length'])){

        for ($i = 0; $i < $_GET['password_length']; $i++) {
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
    }

    return $randomString;
}

?>