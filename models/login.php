<?php 

    class User extends Database{

        public function getUser($username, $password){
            $sql = "SELECT * FROM cliente WHERE correo = '$username' AND contraseña ='$password'";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows == 1){
                return true;
            }

            return false;
        }

        public function siExisteUser($email){
            $sql = "SELECT * FROM cliente WHERE correo = '$email'"; 
            $result = $this->connect()->query($sql);
            if($result->num_rows== 1){
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

    