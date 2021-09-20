<?php
// Função "tradicional"
function soma(int $a = 2, int $b = 2) {
    // Escopo da função soma
    echo "a = {$a}" . PHP_EOL;
    echo "b = {$b}" . PHP_EOL;
    $resultado = $a + $b;
    echo "O resultado de {$a} + {$b} é: {$resultado}";
}

function subtrai($a, $b):int {
    // Escopo da função subtrai
    $resultado = $a - $b;
    return $resultado;
}

function divide($a, $b) {
    // Escopo da função divide
    // global $a, $b; // "passagem" por refência
    $resultado = $a / $b;
    return $resultado;
}
// Escopo global

//Arrow Function
$multiplica = fn($a, $b) => $a * $b; // divide o escopo com o global

/* soma();
soma(5, '2');
soma(3, 1.2); */
$resultado = divide(
    b:10, 
    a:2
);
echo "O resultado é: {$resultado}" . PHP_EOL;
// echo PHP_EOL;
/* $a = 2;
$b = 2;
$resultado = subtrai($a, $b);
echo "O resultado de {$a} - {$b} é: {$resultado}" . PHP_EOL;
echo "O resultado de {$a} * {$b} é: {$multiplica($a, $b)}" . PHP_EOL;
$resultado = divide();
echo "O resultado de {$a} / {$b} é: {$resultado}" . PHP_EOL;
echo $a; */