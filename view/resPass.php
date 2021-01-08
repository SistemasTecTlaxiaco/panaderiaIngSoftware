<?php
include '../controllers/passControl.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    
</head>
 <body>
  <nav class="navbar navbar-light" he  style="background-color: #EEEB2B">
        <a href="../index.php"><img id=logo1 src="../img/logo.png"></a>
  </nav>
<div class="modal-dialog text-center">
  <div class="col-sm-10">
    <div class="modal-content" id="der">
       <br> 
       <div class="col-12">
        <img id="logo" src="../img/ini.png">
        <h1> Beth-el </h1>
      </div> 
      <h4> Recuperación de la cuenta</h4>
      <form class="col-12" action="" method="POST">
      	<p>Introduce tu dirección de correo electrónico para recuperación de la cuenta. </p>
          <div class="form-group">
            <input type="email" name="email"  class="form-control" placeholder="Correo Electrónico" require>
          </div>
          <div>
            <div>
               <button class="btn btn-primary" name="submit" type="submit">Siguiente </button>
            </div>
          </div>
         
          <br>
        
      </form>
    </div>
  
  </div>

</div>
  </body>
</html>