<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <?php include '../php/DbConfig.php' ?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">

    <div>
    <?php
    $mysqli = mysqli_connect($server,$user,$pass,$basededatos);
    if(!$mysqli){
      die('Fallo al conectar a MySQL: '. mysqli_connect_error());
    } else {
      echo 'Se ha relizado la conexión exitosamente';
      echo '<br>';
      echo 'Información del host: ' . mysqli_get_host_info($mysqli) . PHP_EOL;
    }

    $sql = "insert into quiz (Mail, Statement, Correct, Incorrect1, Incorrect2, Incorrect3, Complexity, Subject) values ('".$_POST['email']."','".$_POST['stat']."','".$_POST['right']."','".$_POST['wrong1']."','".$_POST['wrong2']."','".$_POST['wrong3']."','".$_POST['difil']."','".$_POST['subject']."')";
    echo '<br>';
    // echo $sql; shhaa funsyonà
    if(!mysqli_query($mysqli, $sql)){
      die('Error: ' . mysqli_error($mysqli) );
    } else {
      echo 'Se han insertado los datos correctamente';
    }

    mysqli_close($mysqli);
    echo '<br>';
    echo "<a href='../php/ShowQuestions.php'>Ver los datos introducidos, pinsha acààààà</a>";
    ?>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
