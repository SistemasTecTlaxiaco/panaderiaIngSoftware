<?php
include 'controllers/control.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>
  <body>
  <nav class="navbar navbar-light" he  style="background-color: #EEEB2B">
        <a href="index.php"><img id=logo1 src="img/logo.png"></a>
        <form class="form-inline my-2 my-lg-0">

        </form>
        <button class="btn btn-outline-primary"  onclick="location.href='view/registroCliente.php'">Crear Cuenta </button>
    
  </nav>
<div class="modal-dialog text-center">
  <div class="col-sm-10">
    <div class="modal-content" id="der">
        <br>
        <br>
        
      <div class="col-12">
        <img id="logo" src="img/ini.png">
        <h1> Beth-el </h1>
      </div> 
      <form class="col-12" action="" method="POST">
          <div class="form-group">
            <input type="email" name="username"  class="form-control" placeholder="Correo Electrónico" require>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
          </div>
          <button class="btn btn-primary" name="submit" type="submit">Siguiente </button>
          <br><br>
      </form>
    </div>
  
  </div>

</div>
  </body>
  
</html>