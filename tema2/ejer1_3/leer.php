<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1.3</title>
</head>
<body>
<?php 
    //creamos variable para poder 
    //manipular el archivo de texto
    $nombreArchivo = "lorem.txt";
    $archivo = fopen($nombreArchivo,"r"); //abrimos archivo

    if($archivo == false){
        echo ("Error al abrir archivo");
        exit();//funcion que me saca del script
    }

    //obtenemos el tamaño del archivo en bytes
    $size = filesize($nombreArchivo);
    
    //leemos contenido del archivo
    $contenido_archivo = fread($archivo,$size);

    //cerramos archivo
    fclose($archivo);

    echo("Tamaño del archivo: <b> $nombreArchivo </b>: $size bytes");
    echo("<br>");
   // echo("<div style='border:1px solid'>");
    echo("<pre>$contenido_archivo </pre>");
    //echo("</div>");

?>
</body>
</html>
