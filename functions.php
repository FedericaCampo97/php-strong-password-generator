<?php

$number = $_GET['passwordLength'];
if ($number) {
    $password = (generateRandomString($number));
}

function generateRandomString($length)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}
