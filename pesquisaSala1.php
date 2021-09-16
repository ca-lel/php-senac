<?php
/* 
* Bool
* strings
* Operadores de comparação
* Operadores de string
*/

function soma($a = 2, $b = 2){ echo $a + $b; }
function subtrai($a = 2, $b = 2){ echo $a - $b; }

// var_dump(1 <=> '1'); // 100 == "100" -> false

$a = 30;
$b = 20;

if ($a > $b) {
    echo 'If foi executado'. PHP_EOL;
}
elseif ($a < $b) {
    echo "ElseIf foi executado". PHP_EOL;
}
else {
    echo 'Else foi executado' . PHP_EOL;
}

// echo $a > $b ? soma() : subtrai();

switch ($a) {
    case 10:
        echo 'A var. a é igual a 10' . PHP_EOL;
        break;
        
    case 20:
        echo 'A var. a é igual a 20' . PHP_EOL;
        break;
        
    default: // padrão - equivalente ao ELSE
        echo 'A var. a não é igual a 10 e nem a 20' . PHP_EOL;
        break;    
}

echo 'Fim do Script'. PHP_EOL;


