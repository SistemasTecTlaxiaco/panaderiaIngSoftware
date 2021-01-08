<?php 
session_start();
require_once "../models/conexion.php";
if(isset($_POST['submit'])){
    $email = $_POST['email'];


    $datos3=array($email);

    if(empty($email))
    {
        echo "<script>alert('Campo vacio, introduce una correo electronico.');</script>";
        //echo '<div class="alert alert-danger">Intro</div>';
    }else
    {
    require '../models/usuarioCrud.php';
          $obj = new metodos;
    if($obj->existeEmail($datos3))
       {
           echo "<script>alert('El correo si existe');</script>";
           

       }else{
          echo "<script>alert('Correo electronico incorrecto');</script>";

       }

    }

}