//este me dijo q lo metiera daniel para q no me diera problemas raros xd
$(document).ready(function () {
    $('#vfq').click(function () {
        return validarFormulario();
    });
    $('#vfq2').click(function () {
        return validarFormulario2();
    });
});



function validarFormulario() {
    if ($("#email").val() == ""){
      alert("No has introducido un email estupida");
      return false;
    }else{
      if(!validarEmail($("#email").val())){
        alert("El correo no corresponde al de un alumno/profesor de la UPV/EHU");
        return false;
      } else {
        if ($("#stat").val() == "" || $("#stat").val().length <10) {
            alert("Amiga y la pregunta que??? ubykathe, AH! y q tenga almenos 10 caracteres");
            return false;
        } else if ($("#right").val() == "") {
          alert("Y la respuesta correcta, donde esta? ¬¬");
          return false;
        } else if ($("#wrong1").val() == "") {
          alert("Falta la primera respuesta incorrecta");
          return false;
        } else if ($("#wrong2").val() == "") {
          alert("Falta la segunda respuesta incorrecta");
          return false;
        } else if ($("#wrong3").val() == "") {
          alert("Falta la tercera respuesta incorrecta");
          return false;
        } else if ($("#subject").val() == ""){
          alert("No ha introducido el tema correspondiente a la pregunta");
          return false;
        }
      }
      alert("Todo ha ido correctamente :) ");
    }
}

function validarFormulario2() {
  if ($("#stat").val().length <10) {
    alert("Amiga y la pregunta que??? ubykathe, AH! y q tenga almenos 10 caracteres");
    return false;
  }
}


/* Este también funciona pero no dice que campo en concreta esta vacio, solo que hay algún campo vacio en general
function validarFormulario(){
  if($("#email").val() == ""||$("#stat").val() == "" ||$("#right").val() == ""||$("#wrong1").val() == ""||$("#wrong2").val() == ""||$("#wrong2").val() == ""||$("#subject").val() == "")
    alert("Introduce datos en todos los campos");
  else if ($("#stat").val().length <10) {
    alert("La pregunta ha de tener almenos 10 caracteres");
  } else if (!validarEmail($("#email").val())) {
    alert("El email introducido no corresponde a un alumn@/profesor@");
  }
}
*/

function validarEmail(email) {
  //Esta versión no funcionaba: let student = /^[a-zA-Z]+[0-9]{3})+@ikasle\.ehu\.+(eus|es)$/;
  let student = /^[a-zA-Z]+(([0-9]{3})+@ikasle\.ehu\.+(eus|es))$/;
  let teacher = /^[a-zA-Z]+(\.+[a-zA-Z]+@ehu\.(eus|es)|@ehu\.(eus|es))$/;
  if (!student.test(email) && !teacher.test(email)) {
    return false;
  } else {
    return true;
  }
}
