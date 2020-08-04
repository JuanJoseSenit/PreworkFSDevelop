<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

function cuentaLetraA($palabra,$letra){
	$contador=0;
	for($i=0;$i<strlen($palabra);$i++){
		if($palabra[$i]==$letra){
			$contador=$contador+1;
			}
		}
	echo "Número de <strong>$letra</strong> en la expresión <strong>$palabra</strong> es: "    . $contador;
	//echo substr_count($palabra, 'a');
	}
$palabra="Upgrade Hub";
$palabra=strtolower($palabra);
$letra_a_buscar="u";

cuentaLetraA($palabra,$letra_a_buscar);



?>
</body>
</html>