<?php
$email=$_POST["email"];
$password=$_POST["password"];
$confirmar=$_POST["confirmar"];

$longitud_password=strlen($password);
$longitud_confirmar=strlen($confirmar);

//echo "$email $password $confirmar $longitud_password";

if($password!=$confirmar || $longitud_password<8){
	echo "Error en el formulario";
	}
else{
	echo "Datos procesados correctamente";
	}


?>