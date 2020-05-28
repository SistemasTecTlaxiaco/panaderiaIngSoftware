<?php 
require_once "models/conexion.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $datos=array($username,$password);


    if(empty($username) || empty($password)){
        echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
   }else{
         require_once "./models/login.php";
        $user = new User;
        if($user->datosLogin($datos)){
            header('Location:view/home.php');
        }else{
         echo '<div class="alert alert-danger">Usuario no existe</div>';
        }
    }

}