<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (isset($_SESSION['condition'])) {
    foreach ($_SESSION['condition'] as $key => $value)

        if (isset($_GET[$key]) && $_GET[$key] == 'on') {
            $conditions[$key] = true;
        }
}

function generate(int $lenghtPass, $conditions)
{
    foreach ($conditions as $key => $value) {
        if ($value == true) {
            $types[] = $key;
        }
    }

    $randomUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomLower = "abcdefghijklmnopqrstuvwxyz";
    $randomSymbol = "!@#$%^&*()-_=+[]{}|;:'\,.<>?/";
    $randomNumb = "0123456789";

    $counter = 0;
    // $types = [$randomUpper,$randomLower,$randomSymbol,$randomNumb];

    $generated = [];
    while ($counter < $lenghtPass) {
        $type = $types[array_rand($types)];
        if ($type === 'upper') {
            $generated[$counter] = $randomUpper[rand(0, strlen($randomUpper) - 1)];
        } elseif ($type === 'lower') {
            $generated[$counter] = $randomLower[rand(0, strlen($randomLower) - 1)];
        } elseif ($type === 'symbol') {
            $generated[$counter] = $randomSymbol[rand(0, strlen($randomSymbol) - 1)];
        } else {
            $generated[$counter] = $randomNumb[rand(0, strlen($randomNumb) - 1)];
        }
        $password = implode("", $generated);
        $counter++;
    };
    return $password;

    header('Location: ./show.php');
}
