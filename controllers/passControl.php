<?php 
session_start();
require_once "../models/conexion.php";
if(isset($_POST['submit'])){
    $email = $_POST['email'];


    $datos3=array($email);

    if(empty($email))
    {
        echo "<script>alert('Campo vacio, introduce una cuenta de correo.');</script>";
        //echo '<div class="alert alert-danger">Intro</div>';
    }else
    {
    require '../models/usuarioCrud.php';
          $obj = new metodos;
    if($obj->existeEmail($datos3))
       {
           $token = $obj->generarCodigo(6);
           
           if ($obj->inserToken($token, $ident)) {
              echo "<script>alert('El correo si existe');</script>".$token;
           }else{
              "<script>alert('ERROR--> CONSULTA');</script>";

           }

       }else{
          echo "<script>alert('Correo electronico es incorrecto');</script>";

       }

    }

}