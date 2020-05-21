<?php 
require '../models/conexion.php';
if(isset($_POST['submit'])){
    $nombre = $_POST['name'];
    $aPaterno = $_POST['aPaterno'];
    $aMaterno = $_POST['aMaterno'];
    $telefono = $_POST['phone'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $passR = $_POST['passwordR'];

    if(empty($nombre) || 
        empty($aPaterno) || 
        empty($aMaterno) || 
        empty($telefono) || 
        empty($email) || 
        empty($user) || 
        empty($pass) || 
        empty($passR))
        {
        echo '<div class="alert alert-danger"> Rellene todos los campos  </div>';
   }else
   { 
       if($pass==$passR){
        require '../models/login.php';
        $siExisteUser = new User;
       if($siExisteUser->siExisteUser($email))
       {
           echo '<div class="alert alert-danger"> El correo electronico ya Existe </div>';
       }else{
            if($siExisteUser->createUser($nombre,$aPaterno,$aMaterno,$telefono,$email,$user,$pass)){
                header('Location: ../index.php');
                echo '<div class="alert alert-success"> Se Guardo Exitosamente </div>';
            }else{
                echo '<div class="alert alert-danger"> Ha fallado </div>';
            }
       }
         } else{
            echo '<div class="alert alert-danger"> Las contraseñas no son iguales </div>';
         }   
    }

}