<?php  
  echo "Hola Mundo";
  print ("Hello World");
  echo ("Aló");

  // este es un comentario estilo C
  # este es otro comentario estilo python, sql
  /* comentario
  multilinea
  */

  // PHP es Case Sensitive
  // distingue entre mayúsculas y minúsculas
  echo "";
  //Echo ""; //Error

  //Variables
  $miVariable = 10;
  $variableString = "Este es un string";
  $otroString = 'Este es otro String';
  $variableFlotante = 3.141592;

  echo "<br>";
  echo $miVariable;
  echo "<br>";
  echo "El valor de miVariable es $miVariable";//+el valor de la var
  echo "<br>";
  echo 'El valor de miVariable es $miVariable';// simple string
  echo "<br>";
  echo "El valor de miVariable es " . $miVariable . "...";
  echo "<br>";
  //echo $miVariable + $otroString;

  //Constantes
  define("SALUDO","Hola Mundo Cruel");
  define("PI",3.14159264);
  echo "<br>";
  echo PI;

  //Tipos de Datos
  // String +
  // Integer + 
  // Float +
  // Boolean +
  // Arrays +
  // Object
  // NULL
  echo "<br>";
  var_dump($miVariable);
  echo "<br>";
  var_dump($variableString);
  echo "<br>";
  var_dump($variableFlotante);
  $miBoleano = True;
  echo "<br>";
  var_dump($miBoleano);

  //Strings
  echo "<br>";
  //strlen -> regresa la longitud de un string
  echo strlen("Hola cómo estás? espero muy bien");
  $miString2 = "Hola como";
  //str_word_count -> cuenta palabras
  echo "<br> " . str_word_count($miString2);

  //
  //strrev -> voltea un string
  echo "<br>".strrev($miString2);
  
  //operadores
  //op aritmeticos
  // +, -, *, /,  %,  **

  //operadores de asignacion
  // =,  +=, -=, *=, /=, %=,      .=

  //operadores de comparacion
  // ==, !=, <>,  <,  >,  ===

  //operadores de incremento y decremento
  // ++,  --. por ejemplo $i++

  //operadores lógicos
  // and, or, xor, &&, ||, !

  //operadores de string
  // . 
  // .=

  //Funciones del contexto matemático
  // pi() -> regresa 3.141592.......
  // min(0, 15, 20, -8, -1000)
  // max(5, 9, 4, 9000,0)
  // abs() -> valor absoluto
  // sqrt() -> raiz cuadrada
  // round() 
  // rand() -> aleatoreos, rand(5, 60)
  
  // If...else - if...elseif
  if (15 > 8){
      echo "es mayor";
  }
  else{
      echo "es menor";
  }

  $opcion = 5;
  if ($opcion < 5){
      echo "menor";
  }elseif($opcion == 5){
      echo "es igual";
  }
  else{
      echo "es mayor";
  }

  switch ($opcion)
  {
      case 1:echo "algo";
      break;
      case 2: echo "x";
      break;
      default: echo "y";
  }

  //ciclos
  //while
  while (true){
      //cuerpo del while;
  }
  //do while
  do{
      //se ejecutan cuando true
  }while(true);

//for
for ($i= 0; $i<10; $i++){
    // se repite mientras true
}

//arreglos


?>