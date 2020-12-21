<?php
	session_start();


	foreach ($_SESSION["datosUsuario"] as $key => $value) {
		echo $key."  ";
	}
	echo $_SESSION["nombre"];
?>