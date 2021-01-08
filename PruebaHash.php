<?php 
	session_start();
	  
    var_dump($_SESSION["hashq"]);
            
            
       foreach ($_SESSION["hashq"] as $key => $value) {
       	var_dump($key);
       	var_dump($value);
      
       }

 ?>