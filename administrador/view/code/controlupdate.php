<?php 
include_once 'dist/conexion.php';
$informacion = [];
if (!empty($_POST)) {
$codigo=$connect->real_escape_string($_POST['codigo2']);
$nombre=$connect->real_escape_string($_POST['nombre2']);
$precio=$connect->real_escape_string($_POST['precio2']);
$tamano=$connect->real_escape_string($_POST['tamano2']);
$desc=$connect->real_escape_string($_POST['descripcion2']);
$name=$_FILES['imagen']['name'];
$type=$_FILES['imagen']['type'];
$temp=$_FILES['imagen']['tmp_name'];
if(empty($codigo) || empty($nombre) || empty($precio) || empty($tamano) || empty($desc) || $precio <=0){
	$informacion['result']=false;$informacion['msg']= 'No se permiten campos vacios.';
}	
if(empty($name) || empty($type) || empty($temp)){
$query=" UPDATE productos SET  nombre='$nombre', precio='$precio',
	tamano='$tamano', descripcion='$desc' WHERE codigo='$codigo'";
}else{
			$destino='img/uploads/';
			$nameimg='img_'.md5(date('d-m-Y H:m:s'));
			$image=$nameimg.'.jpg';
			$src= $destino.$image;

	$query=" UPDATE productos SET  nombre='$nombre', precio='$precio',
	tamano='$tamano', descripcion='$desc', imagen='$image' WHERE codigo='$codigo'";
}
$sql=$connect->query($query);
if($sql){
	if($name!='' && $type!='' && $temp!=''){
		move_uploaded_file($temp,$src);
		}
	$informacion['result']=true;
	$informacion['msg']= 'Producto Actualizado Correctamente.';
}else{
	$informacion['result']=false;
	$informacion['msg']= 'Error del Sistema Intente mas Tarde.';
}

echo json_encode($informacion);
}else{
	exit(header('location:../../'));  
}
?>