<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Titulo de la pagina</title>
    <link rel="stylesheet" href="/Login/indexprops.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <?php
    $servername = "fdb19.awardspace.net";
    $username = "2615973_krico";
    $password = ":vislife1";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Servicio de autenticacion activo";
    ?>

  </head>
  <body class="cuerpo">
    <div id="grad">
      <div class="titulo">
<p>Titulo Central</p>
</div>
    </div>


    <div class="texto">
      <div class="row around-xs">
          <div class="col-xs-2">
              <div class="box">
                <div class="botones">
                <a href="#">  Subtitulo 1</a>
                </div>
              </div>
          </div>
          <div class="col-xs-2">
              <div class="box">
                <div class="botones">
                  <a href="#">  Subtitulo 1</a>
                </div>
              </div>
          </div>
          <div class="col-xs-2">
              <div class="box">
                <div class="botones">
                  <a href="/index.html">Inicio </a>
                </div>
              </div>
          </div>
      </div>
    </div>

    <div class="forms">
      <div class="login">
          <form action="/user.php">

            <label for="fname">Id</label>
            <input type="text" id="fname" name="firstname" placeholder="ID..">

            <label for="lname">Password</label>
            <input type="text" id="lname" name="lastname" placeholder="Contraseña..">

            <!-- Comentarios-->
            <input type="submit" value="Submit">
            <!---->
          </form>
      </div>
    </div>

  </body>

</html>
