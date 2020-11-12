<?php 
	class metodos{

		public function existeEmail($datos){
			$sql="SELECT * FROM cliente WHERE correo='$datos[0]'";
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

		public function existeUser($datos){
			$sql="SELECT * FROM cliente WHERE usuario='$datos[0]'";
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

		public function insertarDatosUsuario($datos){
			$db=new Database;
            $conn=$db->connect();
			$sql="INSERT into cliente (nombre,ape_pater,ape_mater,telefono,correo,usuario,clave) 
								values ('$datos[0]','$datos[1]','$datos[2]',null,'$datos[3]',null,'$datos[4]')";
			return $result=mysqli_query($conn,$sql);
		}
        
        public function mostrarDatos($sql){
            $db=new Database;
            $conn=$db->connect();
            $result=mysqli_query($conn,$sql);
           return mysqli_num_rows($result);
           
        }

    public function verProductos(){
         $db=new Database;
         $conn=$db->connect();
         $sql="SELECT * from productos";
         $result=mysqli_query($conn,$sql);
         return $result;

    }

	}



 ?>