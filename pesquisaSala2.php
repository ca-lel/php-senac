<?php
/* 
* Inteiros
* floats
* Operadores Aritméticos
* Operadores de incremento e decremento
*/
$a = 12345 . PHP_EOL; // número decimal
echo $a;

$a = 111 . PHP_EOL; // número octal (equivalente a 7 em decimal)
echo $a;

$a = '009B' . PHP_EOL; // número hexadecimal (equivalente a 155 em decimal)(Hex caso contenha letras precisa estar entre aspas,caso contrario não)
echo $a;

$a = 11111111 . PHP_EOL; // número binário (equivalente ao 255 decimal)
echo $a;

/*Espaçamento não necessário*/

echo PHP_EOL;

/*Numeros com ponto flutuante*/

$a = 1.254; // 1,254
echo $a . PHP_EOL;

$a = 1.3e3; // 1,3x10^3 = 1300
echo $a . PHP_EOL;

$a = 7E-11; // 7x10^(-11) = 0,00000000007 
echo $a . PHP_EOL;

/* Numeros com incremento */

echo PHP_EOL;
echo "Pós adição";
echo PHP_EOL;

$a = 5;
echo "Deve ser 5: " . $a++ . PHP_EOL;
echo "Deve ser 6: " . $a . PHP_EOL;

echo PHP_EOL;
echo "Pré adição";
echo PHP_EOL;

$a = 5;
echo "Deve ser 6: " . ++$a . PHP_EOL;
echo "Deve ser 6: " . $a . PHP_EOL;

echo PHP_EOL;
echo "Pós subtração";
echo PHP_EOL;

$a = 5;
echo "Deve ser 5: " . $a-- . PHP_EOL;
echo "Deve ser 4: " . $a . PHP_EOL;

echo PHP_EOL;
echo "Pré subtração";
echo PHP_EOL;

$a = 5;
echo "Deve ser 4: " . --$a . PHP_EOL;
echo "Deve ser 4: " . $a . PHP_EOL;

echo (5 + 3)."\n";           
echo (5 - 3)."\n";          
echo (-5 * 3)."\n"; 
echo (-5 / -3)."\n";
echo (-5 % -3)."\n";
echo (5 ** 3)."\n";