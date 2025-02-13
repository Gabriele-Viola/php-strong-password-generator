<?php
include_once 'functions.php';


$_error = false;
$errorConditions = false;
$conditions = [
    'upper' => isset($_GET['upper']) && $_GET['upper'] === 'on' ? true : false,
    'lower' => isset($_GET['lower']) && $_GET['lower'] === 'on' ? true : false,
    'number' => isset($_GET['number']) && $_GET['number'] === 'on' ? true : false,
    'symbol' => isset($_GET['symbol']) && $_GET['symbol'] === 'on' ? true : false,
];
$_SESSION['condition'] = $conditions;
if (isset($_GET['long']) && $_GET['long'] >= 5) {
    $_SESSION['long'] = (int) $_GET['long'];
    $_error = false;
    header("Location: ./show.php");
} elseif (isset($_GET['long']) && $_GET['long'] < 5) {
    $_error = 'la password deve essere almeno di 5 caratteri';
    $_SESSION['short'] = (int) $_GET['long'];
}
$verify = 0;
foreach ($_SESSION['condition'] as $key => $value) {
    if ($value == False) {
        $verify++;
    }
}

if ($verify == 4) {
    $errorConditions = 'Seleziona almeno una condizione';
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>

    <h1>password generator</h1>
    <form action="" class="form-control">
        <label class="form-label" for="long">Lunghezza della password</label>
        <input type="number" id="long" name="long">
        <label class="form-label" for="upper">Lettere Maiuscole</label>
        <input type="checkbox" id="upper" name="upper">
        <label class="form-label" for="lower">Lettere Minuscole</label>
        <input type="checkbox" id="lower" name="lower">
        <label class="form-label" for="number">Numeri</label>
        <input type="checkbox" id="number" name="number">
        <label class="form-label" for="symbol">Simboli</label>
        <input type="checkbox" id="symbol" name="symbol">

        <button type="submit">invio</button>
    </form>

    <p>
        <?php
        echo $_error ? $_error : '';

        ?>
    </p>
    <p>
        <?php
        echo $errorConditions ? $errorConditions : '';

        ?>
    </p>


</body>

</html>