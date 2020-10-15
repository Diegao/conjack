<?php
$desitno ="diegao1717@gmail.com";
$nombres = $_POST['nombres'];
$telefonos = $_POST['telefonos'];
$correos = $_POST['correos'];
$mensajes = $_POST['mensajes'];
$contenido = "De:" .$nombres ."\n". "correo:" .$correos . "\n". "telefono:" . $telefonos . "\n"."Mensaje" . $mensajes;
$asunto="Contacto desde nuestra web"
mail ($desitno,$asunto, $contenido );

?>

