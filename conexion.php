<?php

/*$servidor="localhost";
$usuario="root";
$pwd="alex";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u812388712_alma";
$pwd="periañez";
$BD="u812388712_alma";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
