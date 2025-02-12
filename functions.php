<?php

$lenght = isset($_GET['long']) ? $_GET['long'] : 0;

function generate(int $lenghtPass)
{
    $randomUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomLower = "abcdefghijklmnopqrstuvwxyz";
    $randomSymbol = "!@#$%^&*()-_=+[]{}|;:'\,.<>?/";
    $randomNumb = "0123456789";

    $counter = 0;


    while ($counter < $lenghtPass) {
        $type = rand(1, 4);
        if ($type == 1) {
            $generated[$counter] = $randomUpper[rand(0, strlen($randomUpper) - 1)];
        } elseif ($type == 2) {
            $generated[$counter] = $randomLower[rand(0, strlen($randomLower) - 1)];
        } elseif ($type == 3) {
            $generated[$counter] = $randomSymbol[rand(0, strlen($randomSymbol) - 1)];
        } else {
            $generated[$counter] = $randomNumb[rand(0, strlen($randomNumb) - 1)];
        }
        $password = implode("", $generated);
        $counter++;
    };
    return $password;
}
