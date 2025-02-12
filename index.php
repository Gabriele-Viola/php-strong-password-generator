<?php
include_once 'functions.php';
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
    <form action="">
        <label for="long">Lunghezza della password</label>
        <input type="number" id="long" name="long">
        <button type="submit">invio</button>
    </form>

    <p>
        <?php
        echo $lenght;

        ?>
    </p>
    <p>
        <?php
        // var_dump(generate($lenght));
        echo generate($lenght);
        ?>
    </p>

</body>

</html>