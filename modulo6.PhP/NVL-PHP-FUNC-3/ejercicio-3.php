<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
function comprobar_vocales($frase){
	$contadora=0;
	$contadore=0;
	$contadori=0;
	$contadoro=0;
	$contadoru=0;
	for($i=0;$i<strlen($frase);$i++){
		if($frase[$i]=="a"){
			$contadora=1;
			}
		elseif($frase[$i]=="e"){
			$contadore=1;
			}
		elseif($frase[$i]=="i"){
			$contadori=1;
			}
		elseif($frase[$i]=="o"){
			$contadoro=1;
			}
		elseif($frase[$i]=="u"){
			$contadoru=1;
			}	
		}
	if($contadora==1 && $contadore==1 && $contadori==1 && $contadoro==1 && $contadoru==1){
		return "LA PALABRA CONTIENE LAS 5 VOCALES";} 
	else{
		return "NO CONTIENE TODAS LAS VOCALES";}
}


$frase="mUrciElago";  //frase que se quiere analizar
$frase=strtolower($frase);

$confirmacion=comprobar_vocales($frase);
echo $confirmacion;  //devuelve en este caso true que es "LA PALABRA CONTIENE LAS 5 VOCALES"


?>
</body>
</html>