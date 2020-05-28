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
      $datos=array($nombre,
                   $aPaterno,
                   $aMaterno,
                   $telefono,
                   $email,
                   $user,
                   $pass,
                   $passR
                );
      $datos1=array($email);
       if($pass==$passR){
          require '../models/usuarioCrud.php';
          $obj = new metodos;
       if($obj->existeEmail($datos1))
       {
           echo '<div class="alert alert-danger"> El correo electronico ya Existe </div>';
       }
       else
       {
          $datos2=array($user);
          if($obj->existeUser($datos2)){
              echo '<div class="alert alert-danger"> El usuario ya existe </div>';
            }else{
                if($obj->insertarDatosUsuario($datos)){
                header('Location: ../index.php');
                echo '<div class="alert alert-success"> Se Guardo Exitosamente </div>';
            }else{
                echo '<div class="alert alert-danger"> Ha fallado </div>';
            }
            }
          
       }
         } else{
            echo '<div class="alert alert-danger"> Las contraseñas no son iguales </div>';
         }   
    }

}