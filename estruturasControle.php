<?php
/**
 * Seleção
 *  if - elseif - else
 *  switch
 *  ternário
 */
/* $a = 30;
$b = 20;

if ($a > $b) {
    echo 'If foi executado'. PHP_EOL;
}
elseif ($a < $b) {
    echo "ElseIf foi executado". PHP_EOL;
}
else {
    echo 'Else foi executado' . PHP_EOL;
} */

// echo $a > $b ? soma() : subtrai();

/* switch ($a) {
    case 10:
        echo 'A var. a é igual a 10' . PHP_EOL;
        break;
        
    case 20:
        echo 'A var. a é igual a 20' . PHP_EOL;
        break;
        
    default: // padrão - equivalente ao ELSE
        echo 'A var. a não é igual a 10 e nem a 20' . PHP_EOL;
        break;    
} */

/**
 * Repetição
 *  for
 *  while
 *  do-while
 *  foreach
 */

/* for ($i = 0; $i < 10; $i++) { 
    echo "i = " . $i . PHP_EOL;
} */

$i = 0;
/* while ($i < 10) {
    echo "i = " . $i . PHP_EOL;
    $i++;
} */

/* do {
    echo "i = " . $i . PHP_EOL;
    $i++;
} while ($i < 10); */

$array1 = array(1, 2, 3, 4, 5); // array normal
$array2 = [
    'chave1' => 1,
    'chave2' => 2,
    'chave3' => 3,
    'chave4' => 4,
    'chave5' => 10,
    'chave6' => 5,
]; // array associtativo

foreach($array2 as $k => $v) {
    echo "posição {$k} tem o valor {$v}" . PHP_EOL;
}

echo 'Fim do Script'. PHP_EOL;