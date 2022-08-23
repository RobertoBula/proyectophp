<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a3dd4e0896.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        .btn-group {

            display: flex;
            justify-content: center;

        }
    </style>

</head>

<body>
    <header>
        <h1 class="text-center">LOGOTIPO</h1>
    </header>
    <div class="container-fluid  bg-light">
        <div class="container">
            <?php
            include "modules/navega.php";
            ?>
        </div>
    </div>
    <section>
        <?php
        $ver = new Controller();
        $ver->enlacesPaginasController();

        ?>
    </section>
</body>

</html>