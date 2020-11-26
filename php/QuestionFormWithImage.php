<!DOCTYPE html>
<html>
<style>
input[type=text] {
width: 60%;
padding: 6px 12px;
margin: 6px 0;
box-sizing: border-box;
}
</style>
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src = "../js/ValidateFieldsQuestion.js"></script>
  <script src = "../js/ShowImageInForm.js"></script>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form id="fquestion" name="fquestion" action="AddQuestion.php" method="get">
        <label for="email">Email*:</label>
        <input type="text" name="email" id="email" placeholder="panchi001@ikasle.ehu.eus">
        <br>
        <label for="stat">Enunciado de la pregunta*:</label>
        <input type="text" name="stat" id="stat">
        <br>
        <label for="right">Respuesta Correcta*:</label>
        <input type="text" name="right" id="right">
        <br>
        <label for="wrong1">Respuesta Incorrecta*:</label>
        <input type="text" name="wrong1" id="wrong1">
        <br>
        <label for="wrong2">Respuesta Incorrecta*:</label>
        <input type="text" name="wrong2" id="wrong2">
        <br>
        <label for="wrong3">Respuesta Incorrecta*:</label>
        <input type="text" name="wrong3" id="wrong3">
        <br>

        <label for="difil">Dificultad:</label>
        <select id="difil" name="difil">
          <option value="low">Baja</option>
          <option value="medium">Media</option>
          <option value="high">Alta</option>
        </select>
        <br>

        <!-- el accept es un filtro para indicar que tipo de archiva puede insertar el usuario-->
        <input type="file" id="file" name="file" value="Examinar..." accept="image/*">
        <div id="imgDynamica"></div>
        <br>

        <label for="subject">Tema(subject)*:</label>
        <input type="text" id="subject" name="subject">
        <br>

        <input type="submit" value="Enviar Solicitud" id="vfq" name="vfq">
        <input type="reset" id="reset" name="reset" value="Limpiar">

        </select>
      </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
