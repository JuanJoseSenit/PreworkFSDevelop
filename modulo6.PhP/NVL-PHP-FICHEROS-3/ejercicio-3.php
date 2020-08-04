<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
//$fecha_actual=getdate();   //da la fecha en forma de matriz
//print_r($fecha_actual);

//$fecha_actual=date('l jS \of F Y h;i;s A');
$fecha_actual=date("Y-m-d H;i;s");

mkdir($fecha_actual,0777);

$abrir=fopen("documento.txt","rb");
$escribir=fopen($fecha_actual . "//documento.modificado.txt","w");
$contenido=fread($abrir,filesize("documento.txt"));
fwrite($escribir,$contenido);





?>
</body>
</html>