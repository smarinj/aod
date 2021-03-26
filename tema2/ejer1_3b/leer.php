<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer 1.3b</title>
</head>
<body>
    <?php
//tratamos de abrir el archivo, si no se puede
//mandamos un mensaje: no se puede abrir
$miArchivo = fopen("miDiccionario.txt", "r") or die("No se puede abrir el archivo");

// Utilizamos un ciclo while para recorrer línea a línea
// el archivo mientras no sea fin de archivo
// y obtenemos dicha línea y la mostramos
// feof -> testea si es fin de archivo
while (!feof($miArchivo)) {
    //fgets lee una linea de texto
    $linea=fgets($miArchivo);
    echo $linea . "<br>";
}
// cerramos el archivo
fclose($miArchivo);
?>
</body>
</html>