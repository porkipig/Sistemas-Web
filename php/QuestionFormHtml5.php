<!DOCTYPE html>
<html>
<style>
input[type=text] {
width: 40%;
padding: 6px 12px;
margin: 8px 0;
box-sizing: border-box;
}
</style>
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src = "../js/ValidateFieldsQuestion.js"></script>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form id="fquestion" name="fquestion" action="AddQuestion.php" method="get">
        <label for="email">Email*:</label>
        <input type="text" name="email" id="email" placeholder="panchi001@ikasle.ehu.eus" pattern="^([a-zA-Z]+(([0-9]{3})+@ikasle\.ehu\.+(eus|es))$|^[a-zA-Z]+(\.+[a-zA-Z]+@ehu\.(eus|es)|@ehu\.(eus|es)))$" required>
        <br>
        <label for="stat">Enunciado de la pregunta*:</label>
        <input type="text" name="stat" id="stat" required>
        <br>
        <label for="right">Respuesta Correcta*:</label>
        <input type="text" name="right" id="right" required>
        <br>
        <label for="wrong1">Respuesta Incorrecta*:</label>
        <input type="text" name="wrong1" id="wrong1" required>
        <br>
        <label for="wrong2">Respuesta Incorrecta*:</label>
        <input type="text" name="wrong2" id="wrong2" required>
        <br>
        <label for="wrong3">Respuesta Incorrecta*:</label>
        <input type="text" name="wrong3" id="wrong3" required>
        <br>

        <label for="difil">Dificultad:</label>
        <select id="difil" name="difil" required>
          <option value="low">Baja</option>
          <option value="medium">Media</option>
          <option value="high">Alta</option>
        </select>
        <br>
        <input type="file" value="Examinar..." accept="image/*">
        <br>

        <label for="subject">Tema(subject)*:</label>
        <input type="text" id="subject" name="subject" required>
        <br>

        <!-- <input type="submit" value="Enviar Solicitud" id="vfq" name="vfq"> -->
        <!-- Ya no hace falta porque  ahora hemos incluido los required en los input y el pattern en el input del email -->
        <!-- Sin embargo no hace la comprobación de que el enunciado tenga almenos 10 caracteres -->
        <input type="submit" value="Enviar Solicitud" id="vfq2" name="vfq2">

        </select>
      </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
