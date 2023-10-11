<script>

function validarRadio(nombreRadio) {
  //event.preventDefault();
    var radios = document.forms["miFormulario"][nombreRadio];
    var seleccionado = false;
    
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            seleccionado = true;
            break;
        }
    }
   
    if (!seleccionado) {
        document.getElementById("error").textContent = "Por favor, selecciona una opción.";
        //event.preventDefault();
        return false;
    }
    
    return true;
}


</script>