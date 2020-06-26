
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="">
    <!-- <link href="/amigosproanimal/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <!-- <link href="/amigosproanimal/assets/css/style.css" rel="stylesheet"> -->
    <!-- page css -->

    <?php 
    include('includes-head.php');
    ?>
    <!-- You can change the theme colors from here -->
    <!-- <link href="/amigosproanimal/assets/css/colors/default-dark.css" id="theme" rel="stylesheet"> -->
</head>
<body> 
    <?php
    include('header.php');
    ?>  
    <br>
    <div class="container  bg-light-extra rounded m-auto">
      <div class="row justify-content-center">
        <div class="col-xs-12 col-md-4 col-md-offset-4 rcorners1">
          <!-- Margen superior (css personalizado )-->

          <!-- Estructura del formulario -->
          <form class="form-group" action="validar-login.php" method="POST">
            <div class="form-row">
              <div class="col text-center">
                <h1 class="mt-5 mb-5">BIENVENIDO</h1>
              </div>
            </div>
            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" required class="form-control" id="user" name="nombre_usuario" placeholder="Ingresa tu usuario">
            </div>

            <!-- Div espaciador -->
            <div class="spacing-2"><br></div>

            <!-- Caja de texto para la clave-->
            <div class="input-group">
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" required autocomplete="off" class="form-control" name="password" id="clave" placeholder="Ingresa tu contraseña">
            </div>

            <!-- Div espaciador -->
            <div class="spacing-1"><br>
          </div>
          
          <!-- Caja de texto para la ubicacion-->
          <div class="input-group">
            <label class="sr-only" for="lugar">Ubicacion</label>
              <div class="input-group-addon"><i class="fas fa-building"></i></div>
              <select name="centro" class="form-control" required id="lugar">
               <option value="CENTRO">Colonia Centro</option>
               <option value="NORTE">Norte</option>
            </select>
            </div>

            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row float-right mt-3">   
              <div class="col-xs-8 col-xs-offset-2">
                <button type="submit" class="btn btn-success btn-block " name="button" id="login">Iniciar sesión</button>
              </div>
            </div>
            

        </form>
          <br><br>
        </div>
      </div>
    </div>

    
<?php 
        include('includes-body.php');
        include('footer.php');
    ?>
</body>
</html>