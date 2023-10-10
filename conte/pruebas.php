<?php 
session_start();
include '../conn/conn.php';
$mensaje = "";
if (!isset($_SESSION["tipo_usuario"])) {
  header("Location: ../index.php");
}

if (isset($_SESSION['pregunta'])) {

    if (isset($_POST['pregunta']) && $_POST['pregunta'] == 1) {
        $_SESSION['pregunta'] = 2;
        $respuesta = "a";
        if($_POST['pre_1']==$respuesta){
            $_SESSION['respuesta_1'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_1_r'] = 1;
        }else {
            $_SESSION['respuesta_1'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_1_r'] = 0;
        }
    }

    if (isset($_POST['pregunta']) && $_POST['pregunta'] == 2) {
        $_SESSION['pregunta'] = 3;
        $respuesta = "a";
        if($_POST['pre_2']==$respuesta){
            $_SESSION['respuesta_2'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_2_r'] = 1;
        }else {
            $_SESSION['respuesta_2'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_2_r'] = 0;
        }
    }

    if (isset($_POST['pregunta']) && $_POST['pregunta'] == 3) {
        $_SESSION['pregunta'] = 4;
        $respuesta = "c";
        if($_POST['pre_3']==$respuesta){
            $_SESSION['respuesta_3'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_3_r'] = 1;
        }else {
            $_SESSION['respuesta_3'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_3_r'] = 0;
        }
    }
    
    if (isset($_POST['pregunta']) && $_POST['pregunta'] == 4) {
        $_SESSION['pregunta'] = 5;
        $respuesta = "e";
        if($_POST['pre_4']==$respuesta){
            $_SESSION['respuesta_4'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_4_r'] = 1;
        }else {
            $_SESSION['respuesta_4'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_4_r'] = 0;
        }
    }

    if (isset($_POST['pregunta']) && $_POST['pregunta'] == 5) {
        $_SESSION['pregunta'] = 6;
        $respuesta = "a";
        if($_POST['pre_5']==$respuesta){
            $_SESSION['respuesta_5'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_5_r'] = 1;
        }else {
            $_SESSION['respuesta_5'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_5_r'] = 0;
        }

        if ($_SESSION['respuesta_1_r'] == 1 && $_SESSION['respuesta_2_r'] == 1 && $_SESSION['respuesta_3_r'] == 1 && $_SESSION['respuesta_4_r'] == 1 && $_SESSION['respuesta_5_r'] == 1) {
            
            $stmt = $pdo->query("INSERT INTO pruebas 
                                 (id_user, prueba, stat, id_prueba)VALUES('".$_SESSION["id"]."', 'Cuestionario de actos y condiciones inseguras', 1, 1)");

            $respuesta_final = '<span style="color:green">Todas sus respuestas son correctas, felicidades!</span>';
        
        }else{
            $respuesta_final = '<span style="color:red">Algunas de las respuestas son incorrectas, vuelva a repasar el contenido! <a href="cursos.php?id_curso=1">Repasar Contenido</a></span>';
        }

    }

}else{
    $_SESSION['pregunta'] = 1;
}


if (isset($_SESSION['pregunta_2'])) {

    if (isset($_POST['pregunta_2']) && $_POST['pregunta_2'] == 1) {
        $_SESSION['pregunta_2'] = 2;
        $respuesta = "c";
        if($_POST['pre_1']==$respuesta){
            $_SESSION['respuesta_1'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_1_r'] = 1;
        }else {
            $_SESSION['respuesta_1'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_1_r'] = 0;
        }
    }

    if (isset($_POST['pregunta_2']) && $_POST['pregunta_2'] == 2) {
        $_SESSION['pregunta_2'] = 3;
        $respuesta = "d";
        if($_POST['pre_2']==$respuesta){
            $_SESSION['respuesta_2'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_2_r'] = 1;
        }else {
            $_SESSION['respuesta_2'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_2_r'] = 0;
        }
    }

    if (isset($_POST['pregunta_2']) && $_POST['pregunta_2'] == 3) {
        $_SESSION['pregunta_2'] = 4;
        $respuesta = "e";
        if($_POST['pre_3']==$respuesta){
            $_SESSION['respuesta_3'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_3_r'] = 1;
        }else {
            $_SESSION['respuesta_3'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_3_r'] = 0;
        }
    }
    
    if (isset($_POST['pregunta_2']) && $_POST['pregunta_2'] == 4) {
        $_SESSION['pregunta_2'] = 5;
        $respuesta = "a";
        if($_POST['pre_4']==$respuesta){
            $_SESSION['respuesta_4'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_4_r'] = 1;
        }else {
            $_SESSION['respuesta_4'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_4_r'] = 0;
        }
    }

    if (isset($_POST['pregunta_2']) && $_POST['pregunta_2'] == 5) {
        $_SESSION['pregunta_2'] = 6;
        $respuesta = "d";
        if($_POST['pre_5']==$respuesta){
            $_SESSION['respuesta_5'] = '<span style="color:green">Respuesta Correcta</span>';
            $_SESSION['respuesta_5_r'] = 1;
        }else {
            $_SESSION['respuesta_5'] = '<span style="color:red">Respuesta Incorrecta</span>';
            $_SESSION['respuesta_5_r'] = 0;
        }

        if ($_SESSION['respuesta_1_r'] == 1 && $_SESSION['respuesta_2_r'] == 1 && $_SESSION['respuesta_3_r'] == 1 && $_SESSION['respuesta_4_r'] == 1 && $_SESSION['respuesta_5_r'] == 1) {
            
            $stmt = $pdo->query("INSERT INTO pruebas 
                                 (id_user, prueba, stat, id_prueba)VALUES('".$_SESSION["id"]."', 'Cuestionario Prevención de Accidentes', 1, 2)");

            $respuesta_final = '<span style="color:green">Todas sus respuestas son correctas, felicidades!</span>';
        
        }else{
            $respuesta_final = '<span style="color:red">Algunas de las respuestas son incorrectas, vuelva a repasar el contenido! <a href="cursos.php?id_curso=2">Repasar Contenido</a></span>';
        }

    }

}else{
    $_SESSION['pregunta_2'] = 1;
}


?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?php include '../includes/head.php'; ?>
  <body class="align-items-center py-4 bg-body-tertiary" style="color:black; background-color:white !important;">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <?php include '../includes/menu.php'; ?>
    <div class="container pt-5">
      <?php // <form action="" method="post"> ?>
        <div class="container">
            <?php echo $mensaje; ?>
            <div class="container text-left" style="border: solid 1px #FADE24; padding:20px;">
              <div class="row">
                <?php if ($_GET['id_prueba']==1) { ?>
                    <form action="" method="post">
                        <div class="col-12" style="border: solid 1px #FADE24; padding:20px;">
                            <?php if ($_SESSION['pregunta'] == 1) { ?>
                            <h4>1.¿Qué es peligro?</h4>
                            <label>a)	Es todo aquello que tiene potencial para hacer daño</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="a">
                            <br><br>
                            <label>b)	Es la probabilidad de que algo pueda hacer daño</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="b">
                            <br><br>
                            <label>c)	Todo lo que me pase en el trabajo</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="c">
                            <br><br>
                            <input type="hidden" name="pregunta" value="1">
                            <button type="submit" class="btn btn-primary">Siguiente 1/5</button>
                            <?php }elseif($_SESSION['pregunta'] == 2){ ?>
                            <h4>2.	¿Qué es un acto inseguro?</h4>
                            <label>a)	Conducta o acción de una persona que viola procesos, procedimientos, normas y leyes que puedan ocasionar accidentes.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="a">
                            <br><br>
                            <label>b)	Tomar alcohol en el trabajo</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="b">
                            <br><br>
                            <label>c)	No ir a trabajar</label> <br> 
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="c">
                            <br><br>
                            <label>d)	Ninguna de las anteriores</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="d">
                            <br><br>
                            <input type="hidden" name="pregunta" value="2">
                            <button type="submit" class="btn btn-primary">Siguiente 2/5</button>
                            <?php }elseif($_SESSION['pregunta'] == 3){ ?>
                            <h4>3.	¿Qué es una condición insegura?</h4>
                            <label>a)	La lluvia</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="a">
                            <br><br>
                            <label>b)	Condiciones del medio ambiente de trabajo que pueden generar un accidente.</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="b">
                            <br><br>
                            <label>c)	A Y B son correctas</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="c">
                            <br><br>
                            <label>d)	Ninguna de las anteriores.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="d">
                            <br><br>
                            <input type="hidden" name="pregunta" value="3">
                            <button type="submit" class="btn btn-primary">Siguiente 3/5</button>
                            <?php }elseif($_SESSION['pregunta'] == 4){ ?>
                            <h4>4.	¿Cuáles son los tipos de mecanismos para accidentes?</h4>
                            <label>a)	Hablar con mi compañero</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="a">
                            <br><br>
                            <label>b)	Golpes</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="b">
                            <br><br>
                            <label>c)	Caídas</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="c">
                            <br><br>
                            <label>d)	Contacto con energía</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="d">
                            <br><br>
                            <label>e)	Todas las anteriores</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="e">
                            <br><br>
                            <input type="hidden" name="pregunta" value="4">
                            <button type="submit" class="btn btn-primary">Siguiente 4/5</button>
                            <?php }elseif($_SESSION['pregunta'] == 5){ ?>
                            <h4>5.	¿Cuáles son las medidas de intervención de los actos y condiciones inseguras?</h4>
                            <label>a)	Eliminación, sustitución, controles de ingeniería, Controles administrativos y EPP</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="a">
                            <br><br>
                            <label>b)	No se pueden intervenir los actos y condiciones inseguras</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="b">
                            <br><br>
                            <label>c)	En mi puesto de trabajo no tengo actos y condiciones inseguras</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="c">
                            <br><br>
                            <input type="hidden" name="pregunta" value="5">
                            <button type="submit" class="btn btn-success">Finalizar 5/5</button>
                            <?php }elseif($_SESSION['pregunta'] == 6){ ?>
                            <h4>Resultados</h4>
                            <label>1.	¿Qué es peligro?</label>  <br>
                            <?php echo $_SESSION['respuesta_1']; ?>
                            <br><br>
                            <label>2.	¿Qué es un acto inseguro?</label>  <br>
                            <?php echo $_SESSION['respuesta_2']; ?>
                            <br><br>
                            <label>3.	¿Qué es una condición insegura?</label>  <br>
                            <?php echo $_SESSION['respuesta_3']; ?>
                            <br><br>
                            <label>4.	¿Cuáles son los tipos de mecanismos para accidentes?</label>  <br>
                            <?php echo $_SESSION['respuesta_4']; ?>
                            <br><br>
                            <label>5.	¿Cuáles son las medidas de intervención de los actos y condiciones inseguras?</label>  <br>
                            <?php echo $_SESSION['respuesta_5']; ?>
                            <br><br>
                            <?php echo $respuesta_final; ?>
                            <?php
                                unset($_SESSION['respuesta_1']);
                                unset($_SESSION['respuesta_2']);
                                unset($_SESSION['respuesta_3']);
                                unset($_SESSION['respuesta_4']);
                                unset($_SESSION['respuesta_5']);
                                unset($_SESSION['pregunta']);
                            } ?>
                        </div>
                    </form>
               <?php }elseif($_GET['id_prueba']==2){ ?>
                  
                  <div class="col-12" style="border: solid 1px #FADE24; padding:20px; margin-top:10px;">
                    <form action="" method="post">
                        <div class="col-12" style="border: solid 1px #FADE24; padding:20px;">
                            <?php if ($_SESSION['pregunta_2'] == 1) { ?>
                            <h4>1.	¿Qué es un accidente de trabajo?</h4>
                            <label>a)	Una enfermedad que adquiero en el trabajo</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="a">
                            <br><br>
                            <label>b)	Una caída</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="b">
                            <br><br>
                            <label>c)	Suceso repentino, por causa u ocasión del trabajo y que me genere una lesión o la muerte.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="c">
                            <br><br>
                            <label>d)	Suceso repentino, por causa u ocasión del trabajo no me genera lesión ni muerte.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_1" value="d">
                            <br><br>
                            <input type="hidden" name="pregunta_2" value="1">
                            <button type="submit" class="btn btn-primary">Siguiente 1/5</button>
                            <?php }elseif($_SESSION['pregunta_2'] == 2){ ?>
                            <h4>2.	No se considera accidente laboral a:</h4>
                            <label>a)	El que fue provocado intencionalmente por el trabajador.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="a">
                            <br><br>
                            <label>b)	El que fue ocasionado por desobediencia comprobada del trabajador.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="b">
                            <br><br>
                            <label>c)	El ocurrido bajo los efectos de la narcosis o influencia del alcohol.</label> <br> 
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="c">
                            <br><br>
                            <label>d)	Todas las anteriores</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_2" value="d">
                            <br><br>
                            <input type="hidden" name="pregunta_2" value="2">
                            <button type="submit" class="btn btn-primary">Siguiente 2/5</button>
                            <?php }elseif($_SESSION['pregunta_2'] == 3){ ?>
                            <h4>3.	¿Qué se debe hacer al momento de sufrir un accidente de trabajo? </h4>
                            <label>a)	Correr al hospital más cercano</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="a">
                            <br><br>
                            <label>b)	Si estoy consciente, reportar a mi jefe inmediato y trasladarme al hospital más cercano.</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="b">
                            <br><br>
                            <label>c)	Si el accidente es de mi compañero, verificar el estado de salud e informar a el jefe inmediato. De ser necesario realizar el traslado o llamar una ambulancia.</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="c">
                            <br><br>
                            <label>d)	Nada esperar que alguien me socorra</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="d">
                            <br><br>
                            <label>e)	B y C</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_3" value="e">
                            <br><br>
                            <input type="hidden" name="pregunta_2" value="3">
                            <button type="submit" class="btn btn-primary">Siguiente 3/5</button>
                            <?php }elseif($_SESSION['pregunta_2'] == 4){ ?>
                            <h4>4.	¿A quien debo reportar el accidente de trabajo?</h4>
                            <label>a)	Supervisor o encargado, jefe inmediato, recursos humanos y seguridad industrial y salud ocupacional.</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="a">
                            <br><br>
                            <label>b)	Al medico del hospital donde me están atendiendo</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="b">
                            <br><br>
                            <label>c)	A mi familia</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="c">
                            <br><br>
                            <label>d)	Ninguna de las anteriores</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_4" value="d">
                            <br><br>
                            <input type="hidden" name="pregunta_2" value="4">
                            <button type="submit" class="btn btn-primary">Siguiente 4/5</button>
                            <?php }elseif($_SESSION['pregunta_2'] == 5){ ?>
                            <h4>5.	¿Qué tiempo tengo para realizar el reporte con recursos humanos, ante la caja del seguro social?</h4>
                            <label>a)	12 horas</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="a">
                            <br><br>
                            <label>b)	36 horas</label>  <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="b">
                            <br><br>
                            <label>c)	2 horas</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="c">
                            <br><br>
                            <label>d)	48 horas</label> <br>
                            <input class="form-check-input" type="radio" id="combustible" name="pre_5" value="d">
                            <br><br>
                            <input type="hidden" name="pregunta_2" value="5">
                            <button type="submit" class="btn btn-success">Finalizar 5/5</button>
                            <?php }elseif($_SESSION['pregunta_2'] == 6){ ?>
                            <h4>Resultados</h4>
                            <label>1.	¿Qué es un accidente de trabajo?</label>  <br>
                            <?php echo $_SESSION['respuesta_1']; ?>
                            <br><br>
                            <label>2.	No se considera accidente laboral a:</label>  <br>
                            <?php echo $_SESSION['respuesta_2']; ?>
                            <br><br>
                            <label>3.	¿Qué se debe hacer al momento de sufrir un accidente de trabajo? </label>  <br>
                            <?php echo $_SESSION['respuesta_3']; ?>
                            <br><br>
                            <label>4.	¿A quien debo reportar el accidente de trabajo?</label>  <br>
                            <?php echo $_SESSION['respuesta_4']; ?>
                            <br><br>
                            <label>5.	¿Qué tiempo tengo para realizar el reporte con recursos humanos, ante la caja del seguro social?</label>  <br>
                            <?php echo $_SESSION['respuesta_5']; ?>
                            <br><br>
                            <?php echo $respuesta_final; ?>
                            <?php
                                unset($_SESSION['respuesta_1']);
                                unset($_SESSION['respuesta_2']);
                                unset($_SESSION['respuesta_3']);
                                unset($_SESSION['respuesta_4']);
                                unset($_SESSION['respuesta_5']);
                                unset($_SESSION['pregunta_2']);
                            } ?>
                        </div>
                    </form>
                  </div>
                  <?php } ?>
              </div>
          </div>
        </div>
      <?php // </form> ?>
    </div>
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../includes/foo.php'; ?>
    </body>
</html>

