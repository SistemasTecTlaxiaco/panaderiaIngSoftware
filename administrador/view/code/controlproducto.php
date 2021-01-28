<?php
require_once 'dist/conexion.php';
$stmt = "SELECT *FROM productos ORDER BY id DESC;";
$stmt = $connect->query($stmt);
if($stmt->num_rows > 0) { 
 while($data = $stmt->fetch_assoc()) {
  $arreglo['data'][]=$data;
 }
} 
$connect->close();
echo json_encode($arreglo);
 ?>