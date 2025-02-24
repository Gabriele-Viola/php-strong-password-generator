<?php
include_once 'functions.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['long'])) {
    header("Location: ./index.php");
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container">
    <div class="card mt-5 shadow">
        <h1 class="text-center mb-3 text-uppercase text-success">
            password generata correttamente
        </h1>

        <div class="text-center mb-3 text-uppercase">
            la password generata è:
        </div>
        <div class="d-flex justify-content-center">

            <div class="text-center mb-3 bg-success p-4 rounded shadow text-light w-50 position-relative">
                <button class="btn btn-secondary position-absolute top-0 start-100 translate-middle"><i class="fa-solid fa-copy"></i></button>
                <div id=password>
                    <?php echo generate($_SESSION['long'], $_SESSION['condition']); ?>
                </div>
            </div>
        </div>
        <a class="text-decoration-none text-primary my-3 text-center" href="./index.php">Cambia parametri</a>
    </div>
</div>

<body>


</body>
<script src="./asset/app.js"></script>

</html>
<?php
session_unset();
session_destroy();
?>