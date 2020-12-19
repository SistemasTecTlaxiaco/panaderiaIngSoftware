
<?php
session_start();
include 'partials/header.php';
?>

<nav class="navbar navbar-light" he  style="background-color: #EEEB2B">
        <a href="home.php"><img id=logo1 src="../img/logo.png"></a>
          <form class="form-inline my-2 my-lg-0">
        </form>
        <button class="btn btn-outline-primary"  onclick="location.href='./home.php'">Regresar atrás</button>
</nav>
<br>
<hr>
<br>
<div class='container'>
<div class="row">
<div class="col-lg-12">


<table class="table table-sm" border=2px>
	<tr class="bg-warning">
		<td align="center">Nombre</td>
		<td  align="center">Imagen</td>
		<td  align="center">Cantidad</td>
		<td  align="center">Precio</td>
	</tr>


<?php
if(isset($_SESSION["carrito"])){
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