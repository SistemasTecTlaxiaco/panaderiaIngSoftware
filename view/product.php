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
<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aris-labelledby="tituloVentana" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<h5 id="tituloVentana">Imagen...</h5>
		<button class="close" data-dismiss="modal" aria-label="Cerrar">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<div class="alert alert-success">
			<h6><strong>Tus datos se guardaron exitosamente. </strong></h6> 
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
		<button type="button" class="btn btn-success">Success</button>
	</div>
</div>
</div>
</div>



  	<div class='container'>
		<div class="row">
			<div class="col-lg-12">
<br>
<table  class="table table-sm">
	<tr class="bg-warning">
		<td>Ide</td>
		<td>Codigo</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Descripcion</td>
		<td>Tamaño</td>
		<td>Imagen</td>
		<td>Ver</td>
		<td>Agregar</td>
	</tr>
	<?php 
		require_once "../models/usuarioCrud.php";
		$produt=new metodos;
		$result=$produt->verProductos();
		while($mostrar=mysqli_fetch_array($result)){
	 ?>
	<tr>
		<td><?php echo $mostrar['id'] ?></td>
		<td><?php echo $mostrar['codigo'] ?></td>
		<td><?php echo $mostrar['nombre_producto'] ?></td>
		<td><?php echo '$ '.$mostrar['precio'] ?></td>
		<td><?php echo $mostrar['descripcion'] ?></td>
		<td><?php echo $mostrar['tamano'] ?></td>
		<td><?php echo "<img src='../img/imagen/".$mostrar['imagen']."' width='70' height='70'>" ?></td>
		<td><button  class="btn btn-success" data-toggle="modal" data-target="#ventanaModal">Ver</button></td>
		<td><button onclick="location.href='./error.php'" type="button" class="btn btn-warning">Agregar</button></td>

	</tr>
<?php 
}
 ?>

</table>

</div>
</div>
</div>			
<br>
<br>
<br>
<br>
<br>
<?php include 'partials/footer.php';?>