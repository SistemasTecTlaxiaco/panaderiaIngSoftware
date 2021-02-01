<?php
require_once '../view/code/dist/conexion.php';
$stmt = "SELECT *FROM pedidos WHERE status=1  ORDER BY id DESC;";
$stmt = $connect->query($stmt);
if($stmt->num_rows > 0) { 
 while($data = $stmt->fetch_assoc()) {
  $arreglo['data'][]=$data;
 }
} 
$connect->close();
echo json_encode($arreglo);
 ?>