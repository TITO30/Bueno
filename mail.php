<?php





$destino="chorizoazul30@gmail.com";
$asunto=$_POST["area"];
$nombre=$_POST["Nombre"];
$correo=$_POST["Correo"];
$telefono=$_POST["Telefono"];
$archivo=$_POST["Archivo"];
$header.="X-Mailer: PHP/: phpversion();

$contenido="Nombre: " . $nombre . "\nArea de interés: " . $asunto . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono;

$mail=mail($destino,"Gestión Ciudadana",$contenido,$header);
if($mail){
echo "<h4>Mail enviado exitosamente</h4>"; }




?>
