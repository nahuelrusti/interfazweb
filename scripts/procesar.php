<?php
$to = "nahuellopezroom@gmail.com";
$subject = "Mail desde el formulario";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1><br>
<p>Nombre: $nombre </p><br>
<p>Email: $email </p><br>
<p>Comentarios: $comentarios </p>
</body>
</html>";
 echo 'Gracias por comunicarse con nosotros';
mail($to, $subject, $message, $headers);
?>