<?php
/* 
* Array
* Iteráveis
* Operadores de Atribuição
* Operadores Lógicos
*/
/* $a = 3;
echo "A var. a vale {$a}" . PHP_EOL;

$a += 5;
// $a = $a + 5; 
echo "A var. a vale {$a}" . PHP_EOL;

$a -= 5; 
// $a = $a - 5; 
echo "A var. a vale {$a}" . PHP_EOL;

$b = "Batata";
$b .= "Assada"; 
// $b = $b . "Assada"; 
echo $b . PHP_EOL;

$c = &$b; // passagem por referência
echo $c . PHP_EOL;

$c = 'Davi gosta de C++';
echo $b . PHP_EOL;
echo $c . PHP_EOL; */


/**Operadores Lógicos
 * E -> && / and
 * OU -> || / or
 * NÃO -> !
 * Ou Exclusivo -> xor
 */

$array1 = array(1, 2, 3, 4, 5); // array normal
$arrayNumero2 = [
    'valor1' => 1,
    'valor2' => 2,
    'valor3' => 3,
    'valor4' => 4,
    'valor5' => 5,
]; // array associtativo
$array3 = [
    1,
    2,
    3,
    4,
    5
];

// var_dump($array1);
var_dump($arrayNumero2);
var_dump($array3);