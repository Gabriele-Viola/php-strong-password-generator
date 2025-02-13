<?php
include_once 'functions.php';


$_error = false;
$conditions = [
    'upper' => isset($_GET['upper']) && $_GET['upper'] === 'on' ? true : false,
    'lower' => isset($_GET['lower']) && $_GET['lower'] === 'on' ? true : false,
    'number' => isset($_GET['number']) && $_GET['number'] === 'on' ? true : false,
    'symbol' => isset($_GET['symbol']) && $_GET['symbol'] === 'on' ? true : false,
];
$_SESSION['condition'] = $conditions;


$verify = 0;
foreach ($conditions as $key => $value) {
    if ($value == False) {
        $verify++;
    }
}


$errorConditions = false;

if (isset($_GET['long']) && $_GET['long'] >= 5) {
    $_SESSION['long'] = (int) $_GET['long'];
    $_error = false;
    if ($verify == 4) {
        $errorConditions = 'Seleziona almeno una condizione';
    } else {
        $errorConditions = false;
        header("Location: ./show.php");
    }
} elseif (isset($_GET['long']) && $_GET['long'] < 5) {
    $_error = 'la password deve essere almeno di 5 caratteri';
    $_SESSION['short'] = (int) $_GET['long'];
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
    <div class="container">
        <div class="row">

            <div class="card p-5 shadow mt-5">
                <h1 class="text-uppercase text-center mb-3">password generator</h1>

                <form action="" class="form-control mb-4 ">
                    <div class="d-flex justify-content-between mb-3">

                        <label class="form-label" for="long">Lunghezza della password</label>
                        <input class="form-control w-25 text-end" type="number" id="long" name="long">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <label class="form-label" for="upper">Lettere Maiuscole</label>
                        <input class="form-check-input" type="checkbox" id="upper" name="upper">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <label class="form-label" for="lower">Lettere Minuscole</label>
                        <input type="checkbox" class="form-check-input" id="lower" name="lower">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <label class="form-label" for="number">Numeri</label>
                        <input type="checkbox" class="form-check-input" id="number" name="number">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <label class="form-label" for="symbol">Simboli</label>
                        <input type="checkbox" class="form-check-input" id="symbol" name="symbol">
                    </div>
                    <div class="text-end">

                        <button type="submit" class="btn btn-success">invio</button>
                    </div>
                </form>
                <div class="d-flex align-items-end flex-column">

                    <p class="bg-danger text-light w-25 rounded">
                        <?php
                        echo $errorConditions ? $errorConditions : '';

                        ?>
                    </p>
                    <p class="bg-danger text-light w-25 rounded ">
                        <?php
                        echo $_error ? $_error : '';

                        ?>
                    </p>
                </div>
            </div>

        </div>

    </div>



</body>

</html>