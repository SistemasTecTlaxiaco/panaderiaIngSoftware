<?php 
 //Requiere los archivos 
require_once "mailer/Exception.php";
require_once "mailer/PHPMailer.php";
require_once "mailer/SMTP.php";


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer;

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp-relay.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sucursal.bethel.01@gmail.com';                     // SMTP username
    $mail->Password   = '$bethel2021sucursal#01';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('sucursal.bethel.01@gmail.com', 'Bethel');
    $mail->addAddress('miguelrojasmarcy@gmail.com', 'Marcial');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Codigo de verificacion de BETH-EL';
    $mail->Body    = 'Codigo de Verificacion: 324-432-3424 </b>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'El mensaje se envio corectamente.';
} catch (Exception $e) {
    echo "Error al eviar el mensaje: {$mail->ErrorInfo}";
}

 ?>