<?php 

    class User{

        public function datosLogin($datos){
            $sql="SELECT * FROM cliente WHERE correo='$datos[0]' AND clave='$datos[1]'";
            $db=new Database;
            $conn=$db->connect();
            $result=mysqli_query($conn,$sql);
            $row_cnt = mysqli_num_rows($result);
            if($row_cnt>0){
                 return true;
            }else{
                 return false;        
            }
         }


        public function siExisteUser($email){
            $sql = "SELECT * FROM cliente WHERE correo = '$email'"; 
            $result = $this->connect()->query($sql);

            $numRows = $result->num_rows;
            if($numRows == 1){
                return true;
            }

            return false;
        }
        
        public function createUser($nombres,$aPaterno,$aMaterno,$tel,$email,$user,$password){
            $sql = "INSERT INTO `cliente` (nombre, ape_pater, ape_mater, telefono, correo, usuario, contraseña)  VALUES ('$nombres', '$aPaterno', '$aMaterno', '$tel', '$email', '$user', '$password')";
            $resul = $this->connect()->query($sql);
            if($resul){
              return true;
            }else{
            return false;
         }
        }
    }

    