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

<table style="border-collapse: collapse;" border="1">
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</tr>
		<?php 
			$obj=new metodos();
			$sql="SELECT id,nombre_producto,precio,descripcion,tamaño,imagen from productos";
			$datos=$obj->mostrarDatos($sql);
			foreach ($datos as $key) {
		 ?>
		<tr>
			<td><?php echo $key['nombre_producto']; ?></td>
			<td><?php echo $key['precio']; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a>
			</td>
			<td>
				<a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a>
			</td>
		</tr>
		<?php 
		}
		 ?>
	</table>
			

<?php include 'partials/footer.php';?>