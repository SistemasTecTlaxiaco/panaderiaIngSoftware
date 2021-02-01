<?php
    date_default_timezone_set('GMT');
    date_default_timezone_set('America/Mexico_City');
    $host="localhost";
        $user="root";
        $pass="";
        $name="panaderia"; 
    $connect=@new mysqli($host,$user,$pass,$name);
    if ($connect->connect_errno){
        ?>
        <div class="container" align="center" style="padding-top: 3cm;"><img src="../../img/logo.png" style="max-width: 200px;"></div>
        <table style="padding-top: 2cm;padding-left: 4cm;padding-right: 4cm;text-align: center" >
            <thead>
                <tr>
                    <th>Error</th>
                    <th>Ayuda</th>
                    <th>Soporte</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No se pudo conectar con la base datos</td>
                    <td style="background: orange">Configura este archivo con el nombre correcto de la base de datos, nombre del usuario y contraseña de la base de datos.</td>
                    <td>Via de contacto para soporte tecnico.</td>
                </tr>
            </tbody>
        </table>        
        <?php
        exit;
    }
?>