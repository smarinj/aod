<?php
//crear una constante
define ("NUM_MAX_VAL", 13);

function generar($min, $max){
    $valor = mt_rand($min, $max) / 10;
    return $valor;
}    

/*
//cramos un arreglo
$arreglo = array();
//poblamos arreglo
for ($i = 0; $i < NUM_MAX_VAL; $i++) {
    
    $arreglo[] = generar(30, 90);
}

//mostramos arreglo
foreach ($arreglo as $val) {
    echo $val . "<br>";
}
*/



//creamos archivo con valores
$archivo = fopen("datos.txt","w") or die("No se pudo crear archivo");

//ciclo para generar 13 valores y escribirlos en un archivo
for ($i = 0; $i < NUM_MAX_VAL; $i++) {
    $dato = generar(30, 90);
    if ($i == NUM_MAX_VAL-1){
        fwrite($archivo, $dato);  
    }
    else{
        fwrite($archivo, $dato."\n");
    }
        
}
echo "Archivo escrito";



?>