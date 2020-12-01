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
      $sqldatos = 'SELECT * FROM quiz';
      if(!$mysqli){
          die('Fallo al conectar a MySQL: ' . mysqli__connect_error($mysqli));
      } else {
        echo 'Connection OK';
      }
      $sql = 'SELECT * FROM quiz';
      $sql_datos = mysqli_query($mysqli, $sql);
      echo '<table border=1> <tr> <th>Email</th> <th>Enunciado</th> <th>Respuesta Correcta</th> <th>Respuesta Incorrecta (1)</th> <th>Respuesta Incorrecta (2)</th> <th>Respuesta Incorrecta (3)</th> <th>Dificultad</th> <th>Tema</th> </tr>';
      while($row = mysqli_fetch_array($sql_datos)){
        echo '<tr><td>' . $row['Mail'] . '</td><td>' . $row['Statement'] . '</td><td>' . $row['Correct'] . '</td><td>' . $row['Incorrect1'] . '</td><td>' .
         $row['Incorrect2'] . '</td><td>' . $row['Incorrect3'] . '</td><td>' . $row['Complexity'] .  '</td><td>' . $row['Subject'] . '</td></tr>';
      }
      echo '</table>';
      mysqli_close($mysqli);
      ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
