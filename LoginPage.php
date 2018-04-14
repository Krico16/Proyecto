<!DOCTYPE html>
<html lang="es">
<?php
    include ('Lib.php');
    ?>

    <head>
        <meta charset="utf-8">
        <title>AccSoft</title>
        <link rel="icon" href="icon.png">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
        <link rel="stylesheet" href="propiedades.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>

    <body style="background-color:#222222">

        <?php
            cinta();
            titulo();

    ?>

            <form action="" method="post" enctype="multipart/form-data" style="color:red">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantener conectado</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>


            <?php
        footer();
        ?>



    </body>
