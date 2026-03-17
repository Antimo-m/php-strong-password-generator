<?php
function generapassword($pass = 12)
{
    $minuscole = 'abcdefghijklmnopqrstuvwxyz';
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()-_=+[]{};:,.<>?';

    $tutti = $minuscole . $maiuscole . $numeri . $simboli;

    $password = '';
    for ($i = 0; $i < $pass; $i++) {
        $posizione = random_int(0, strlen($tutti) - 1);
        $password .= $tutti[$posizione];
    }
    return $password;
}
