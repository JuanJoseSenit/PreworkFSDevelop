<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
$contador=0;
$fd=fopen("el_quijote.txt","rb");  //Almacenada en una variable la apertura del txt en modo lectura.

$contenido=fread($fd,filesize("el_quijote.txt")); //He usado fread porque es más fácil su posterior separación en elementos de una sola matriz
$contenido=strtolower($contenido);					
$palabras_matriz=explode(' ', $contenido);  //Genera una matriz de n elementos, donde n son las palabras, ya que he indicado que un espacio es 
											//la separación de elementos
											
for($i=0;$i<count($palabras_matriz);$i++){  //bucle que recorre desde 0 hasta la longitud de la matriz en incrementos de 1
	if($palabras_matriz[$i]=="molino" || $palabras_matriz[$i]=="molino," || $palabras_matriz[$i]=="molino." || $palabras_matriz[$i]=="molino!" || $palabras_matriz[$i]=="molino;" || $palabras_matriz[$i]=="molino?" ){  //condicional que incrementa en 1 el contador si es que aparece la palabra molino en el txt					
																			
		$contador=$contador+1;
		}
	}
echo $contador;

fclose($fd);





?>
</body>
</html>