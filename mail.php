<?php





$destino="moralestito569@gmail.com";
$asunto=$_POST["area"];
$nombre=$_POST["Nombre"];
$correo=$_POST["Correo"];
$telefono=$_POST["Telefono"];
$archivo=$_POST["Archivo"];

$contenido="Nombre: " . $nombre . "\nArea de interés: " . $asunto . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono;

mail($destino,"Gestión Ciudadana",$contenido)
header("Location:index.html")



?>
