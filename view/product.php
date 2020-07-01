 <?php 
	require_once "../models/conexion.php";
	require_once "../models/usuarioCrud.php";
 ?>
 <?php include 'partials/header.php' ?>
<nav class="navbar navbar-light" he  style="background-color: #EEEB2B">
        <a href="home.php"><img id=logo1 src="../img/logo.png"></a>
          <form class="form-inline my-2 my-lg-0">
        </form>
        <button class="btn btn-outline-primary"  onclick="location.href='./home.php'">Regresar atrás</button>
</nav>

</nav>
<div class="modal-dialog text-center">
  <div class="col-sm-16">
    <div class="modal-content">
      <br>  <br>
      <button  onclick="location.href=''" class="btn btn-outline-light text-dark" ><img id="imgTamaño" src="../img/img01.png" class="img-responsive" alt="Responsive image">Productos</button>
      <br>  <br>
    </div>
  
  </div>

</div>
			

<?php include 'partials/footer.php';?>