<?php 
include "conexion.php";

$Id=$_POST["ID"];

$nom=$_POST["Nom"];
$dir=$_POST["Dir"];
$rfc=$_POST["Rfc"];
$tel=$_POST["Tel"];
$clasif=$_POST["Clasif"];
$foto=$_POST["Foto"];
$lat=$_POST["Lat"];
$longit=$_POST["Long"];


$sql="UPDATE servicios SET Nombre_servicio='$nom','$dir','$rfc','$tel','$clasif','$foto','$lat','$longit' WHERE Id_servicio=$Id";
 

 ?>
