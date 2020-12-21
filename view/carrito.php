
<?php
session_start();

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
		<td><?php echo $indice;?></td>
	

	<?php
	foreach ($arreglo as $key => $value) {
		if($key=="img"){
			?>
			<td><?php echo "<img src='../img/imagen/".$value."' width='100' height='100'>";?></td>


		<?php
		}else if($key=="precio"){
		$PagoTotal += $value * $arreglo["cantidad"];
		?>

			<td><?php echo "$ ".$value * $arreglo["cantidad"];?></td>
		<?php
		}else{
		?>
			<td><?php echo $value;?></td>
		<?php
		}

		
	}

	?>
   </tr>

	<?php
}
?>

</table>

<hr>
<h3>Pago Total: <?php echo "   ".$PagoTotal; ?> <h3>

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

<?php include 'partials/footer.php';?>