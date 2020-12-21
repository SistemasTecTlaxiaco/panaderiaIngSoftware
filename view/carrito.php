
<?php
session_start();
if(isset($_SESSION["datosUsuario"])){
include 'partials/header.php';
?>

<nav class="navbar navbar-light" he  style="background-color: #EEEB2B">
        <a href="home.php"><img id=logo1 src="../img/logo.png"></a>
          <form class="form-inline my-2 my-lg-0">
        </form>
       
</nav>
<br>
<h3 align="center">Carrito de compras</h3>
<hr>

<div class='container'>
<div class="row">
<div class="col-lg-12">

 <button class="btn btn-outline-primary"  onclick="location.href='product.php'">Más Productos<span class="glyphicon glyphicon-search"></span></button>
 
<hr>
<table class="table table-sm" border=0px>

<?php

if(isset($_SESSION["carrito"])){
	$PagoTotal=0;
foreach ($_SESSION["carrito"] as $indice => $arreglo) {
?>
	<tr>
	
	

	<?php
	foreach ($arreglo as $key => $value) {
		if($key=="img"){
			?>
			<td align="center"><?php echo "<img src='../img/imagen/".$value."' width='100' height='100'>";?></td>
				<td align="center"><?php echo $indice;?></td>

		<?php
		}else if($key=="precio"){
		$PagoTotal += $value * $arreglo["cantidad"];
		?>

			<td align="center"><?php echo "$ ".$value * $arreglo["cantidad"];?></td>
		<?php
		}else{
		?>
			<td align="center"><?php echo $value;?></td>
		<?php
		}


		
	}
		?>
		<td align="center">
			<form action="" method="POST" >
				<input type="hidden" name="arreglo" value="<?php echo $indice?>">
				<input type="submit" value="Eliminar" name="btnEliminar" class="btn btn-danger">
			</form>
		</td>
		<?php

	?>
   </tr>

	<?php
}
?>

</table>

<hr>
<h3>Pago Total: <?php echo " $ ".$PagoTotal; ?> <h3>
<br>
	<form action="" method="POST" >
				<input type="hidden" name="arreglo" value="<?php echo $indice?>">
				<input type="submit" value="Continuar con la compra" name="btnComprar" class="btn btn-success">
			</form>


<?php


}else{
	echo "<script>alert('El carrito esta vacio');</script>";
	?>
	<a href="product.php">Regresar</a>

	<?php
}

?>
</div>
</div>
</div>


  <?php 
     if (isset($_REQUEST["btnEliminar"])) {
     	$deli=$_REQUEST["arreglo"];
     	
 		unset($_SESSION["carrito"][$deli]);
     	echo "<script>alert('$Producto Eliminado.');</script>";
     	header('Location: carrito.php');

     }
   ?>	

   <?php include 'partials/footer.php';
}else{
   header('Location:../index.php');
}
?>