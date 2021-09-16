<?php
// echo 'Hello, world' . PHP_EOL;
/**
* Concatenar <=> unir/juntar
* PHP_EOL -> End Of Line (Fim da linha)
* quebra a linha.
*/

/* var_dump(5); // int -> inteiro
var_dump(5.25); // float -> ponto flutuante
var_dump("5.25"); // string -> texto
var_dump("Caio e genial"); // string -> texto
var_dump("Caio é genial"); // string -> texto
var_dump(true); // bool -> booleano (true ou false) */

/** 
* Declarando variáveis
* No js... 
*   var -> globais.
*   let -> locais e que pudessem variar de valor.
*   const -> locais e contantes.
*
* PHP é FRACAMENTE TIPADO. Ou seja, o tipo do dado
* de uma variável NÃO precisa ser declarado explicitamente.
*/
$taxaDeCambioUSS = 5; // int
$text = "qualquer coisa"; // string

echo $taxaDeCambioUSS . PHP_EOL; // inteiro
$taxaDeCambioUSS = 5.38; // float

echo $taxaDeCambioUSS . PHP_EOL; // float
echo $text . PHP_EOL;