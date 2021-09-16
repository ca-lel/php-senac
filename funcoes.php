<?php
// Função "tradicional"
function soma(int $a, int $b) {
    // Escopo da função soma
    $resultado = $a + $b;
    echo "O resultado de {$a} + {$b} é: {$resultado}";
}

function subtrai($a, $b):int {
    // Escopo da função subtrai
    $resultado = $a - $b;
    return $resultado;
}

function divide() {
    // Escopo da função divide
    global $a, $b; // "passagem" por refência
    $a = 3;
    $resultado = $a / $b;
    return $resultado;
}
// Escopo global

//Arrow Function
$multiplica = fn($a, $b) => $a * $b; // divide o escopo com o global

soma(2, '2');
echo PHP_EOL;

$a = 2;
$b = 2;
$resultado = subtrai($a, $b);
echo "O resultado de {$a} - {$b} é: {$resultado}" . PHP_EOL;
echo "O resultado de {$a} * {$b} é: {$multiplica($a, $b)}" . PHP_EOL;
$resultado = divide();
echo "O resultado de {$a} / {$b} é: {$resultado}" . PHP_EOL;
echo $a;