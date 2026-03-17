<?php
function generapassword($pass, $lowercase, $uppercase, $numbers, $symbols)
{
   $chars = "";


   if($lowercase){
    $chars .= 'abcdefghijklmnopqrstuvwxyz';
   }
   if($uppercase){
    $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   }
   if($numbers){
       $chars .= '0123456789';
   }
   if($symbols){
    $chars .= '!@#$%^&*()-_=+[]{};:,.<>?';
   }
    if (empty($chars)) {
        return "Seleziona almeno un tipo di carattere!";
    }

    $password = '';
    for ($i = 0; $i < $pass; $i++) {
        $posizione = random_int(0, strlen($chars) - 1);
        $password .= $chars[$posizione];
    }
    return $password;
}
