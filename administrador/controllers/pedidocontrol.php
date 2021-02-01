<?php 
require_once '../view/code/dist/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
	$array_devolver=[];
	$eliminar=$connect->real_escape_string($_POST['eliminarpedido']);

$stmt = "SELECT * FROM pedidos WHERE id='$eliminar';";
$stmt=$connect->query($stmt);
if($stmt->num_rows > 0) { 
	 $sql = "UPDATE pedidos SET status=0  WHERE id =$eliminar";
     $del = $connect->query($sql);
	 if($del){
			 $array_devolver['full']=true;
			 $array_devolver['mensaje']= 'Cancelado Exitosamente';

	 }else{
	 	   	 $array_devolver['full']=false;
			 $array_devolver['mensaje']='Error al Cancelar Pedido...';
	 }
}else{
	$array_devolver['full']=false;
	$array_devolver['mensaje']='El Pedido no existe.';
}


           
	
echo json_encode($array_devolver);
}else{
	exit(header('location:../')); 
}

 ?>