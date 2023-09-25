<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$to = "nahuellopezroom@gmail.com";
$asunto = "Recibiste un nuevo correo";
$mensaje = "<h1>Datos recibidos</h1><br>";
$mensaje .= "Nombre = ".$name."<br>";
$mensaje .= "Email = ".$email."<br>";
$mensaje .= "Edad = ".$edad."<br>"
mail($to, $asunto, $mensaje);
?>