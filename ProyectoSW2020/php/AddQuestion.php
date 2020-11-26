<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
		 <!--
      el correo de del usuario es el siguiente <?php: echo $_GET["email"]; echo $_GET["mail"] ?>
    -->
    <? php
    $mysqli = mysqli_connect('127.0.0.1','panchibase','9uZvReIL576SufkL','quiz');
    if(!mysqli){
      die('Fallo al conectar a MySQL: '. mysqli_connect_error());
    }
    echo 'Se ha relizado la conexión exitosamente';ç
    echo 'Información del host: ' . mysqli_get_host_info($mysqli) . PHP_EOL;
    mysqli_close($mysqli);
    ?>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
