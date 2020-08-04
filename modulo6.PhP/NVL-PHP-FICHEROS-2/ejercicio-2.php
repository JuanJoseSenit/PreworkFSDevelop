<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

function reemplazar($fichero_lectura,$fichero_escritura,$palabra_buscar,$palabra_sustituir){
	$abrir=fopen($fichero_lectura,"r");
	$contenido=fgets($abrir);

	$escribir=fopen($fichero_escritura,"w");
while($contenido!=false){
	
	$palabras_matriz=explode(' ', $contenido);
	for($i=0;$i<count($palabras_matriz);$i++){
		/*if($palabras_matriz[$i]==$palabra_buscar){    //Este if comprueba, pero si aparece [Sancho,] [Sancho;] no los tiene en cuenta 
			$palabras_matriz[$i]=$palabra_sustituir;
			}*/
		$palabras_matriz[$i]=str_replace($palabra_buscar,$palabra_sustituir,$palabras_matriz[$i]);  //esta función permite ver dentro del string una porción, si encuentra lo que le especificamos, lo cambia por lo que le digamos, y el resto del string no lo modifica
		$palabras_matriz[$i]=str_replace(strtoupper($palabra_buscar),strtoupper($palabra_sustituir),$palabras_matriz[$i]);
		fwrite($escribir,$palabras_matriz[$i]." ");
			
		}
	$contenido=fgets($abrir); //salta a la linea siguiente
	}
	
	}

$palabra_buscar="Sancho";
$palabra_sustituir="Morty";
reemplazar("el_quijote.txt", "quijote-modificado.txt", $palabra_buscar, $palabra_sustituir);

?>
</body>
</html>