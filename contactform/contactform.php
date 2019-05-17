<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$empresa = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "Este mensage fue enviado por: ".$name."\r\n";
$message .= "El Email es: ".$mail."\r\n";
$message .= "Telefono: ".$subject."\r\n";
$message .= "Mensaje: ".$_POST['message']."\r\n";
$message .= "Enviado el: ".date('d/m/Y',time());



$para = 'aldahirdelrosario97@hotmail.com';
$asunto = 'Mensaje desde la web';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='http://cuenri.com/AlexDelRosario';</script>";
  


 ?>