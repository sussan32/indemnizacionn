<?php
//declaramos las variables antes
$usuario = "";
$clave = "";

$error = "";

if (isset($_POST['boton'])) { //si el boton esta seteado(accionado) para por aca
    if (isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
    }
    if (isset($_POST['clave'])) {
        $clave = $_POST['clave'];
    }

    if ($usuario === "yss" && $clave === "12345") {  //si cumple la condicion
        header("Location: inicio.php");
    } else {
        $error = 'Credenciales incorrectas'; //,mensaje de error
    }
}
?>
<html>
    <head>
        <style>
            label{
                color: blue;font-size: 1.7em;
            }
.container{
              background-color: #f77eaf;
               
               border:3px solid black;
               border-radius:22px;
             width: 200px;
margin: 50px auto;
font: 1em arial, helvetica, sans-serif;
padding: 20px;
  
            
             
           }

            </style>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- Boostrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
    <body background="C:\Users\susan\OneDrive\Escritorio\ADMINISTRACION DE SERVICIOS PARA LA WEB\xamp\htdocs\amor\f.jpg">
        <div class="container">
            <div class="row">
                <div class="offset-3 col-md-6">
                    <form method="POST" action="index.php"> <!-- inicio formulario -->
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="usuario" value="<?= $usuario ?>" /> <!-- campo de texto usuario -->
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="clave" value="<?= $clave ?>" /> <!-- campo de texto clave -->
                        </div>
                        <?= $error ?> <!-- mostrar el error -->
                        <div class="form-group">
                            <input type="submit" name="boton" class="btn btn-info" value="Iniciar"/> <!-- boton para enviar el formulario -->
                        </div>
                    </form> <!-- fin formulario -->
                </div>
            </div>
        </div>
    </body>
</html>