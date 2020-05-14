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
        <button  class="btn btn-default" onclick="location.href='index.php'">
        <form class="form-inline my-2 my-lg-0">
        <a href="view/registroCliente.php"><H1>Crear Cuenta</H1></a>
        </form>
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
            <input type="text" name="username" class="form-control" placeholder="Correo Electrónico" require>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
          </div>
          <button id=btn name="submit" type="submit">Siguiente </button>
          <button type="button" class="btn btn-lg btn-warning">Warning</button>
          <button type="button" class="btn btn-lg btn-primary">Primary button</button>
          <br><br>
      </form>
    </div>
  
  </div>

</div>
  </body>
  
</html>