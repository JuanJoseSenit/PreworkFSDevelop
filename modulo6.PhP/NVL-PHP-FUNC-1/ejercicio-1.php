<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

function cuentaLetraA($palabra){
	$contador=0;
	for($i=0;$i<strlen($palabra);$i++){
		if($palabra[$i]=="a" || $palabra[$i]=="A"){
			$contador=$contador+1;
			}
		}
	echo "Número de a: " . $contador;
	//echo substr_count($palabra, 'a');
	}
$palabra="Upgrade Hub";
cuentaLetraA($palabra);



?>
</body>
</html>