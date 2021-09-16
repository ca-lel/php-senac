<?php
// Single Responsability (Responsabilidade Única)

function realizaOperacao($valorUm, $valorDois, $operacao) {
    /**
     * Retorna o valor de uma operação matemática,
     * baseado no valor do parâmetro $operacao. Se
     * a operação não existir, retorna null.
     * 1 - Soma
     * 2 - Subtração
     * 3 - Multiplicação
     * 4 - Divisão
     */

    // global $valorUm, $valorDois;

    switch ($operacao) {
        case 1: 
            return $valorUm + $valorDois;
    
        case 2:
            return $valorUm - $valorDois;
    
        case 3:
            return $valorUm * $valorDois;
    
        case 4:
            return $valorUm / $valorDois;
        
        default:
            return NULL;
    }
}

function pegaEntradaDoUsuario() {
    return rtrim(fgets(STDIN));
}

// $pegaEntradaDoUsuario = fn() => rtrim(fgets(STDIN));


echo 'Digite o valor 01: ';
$valorUm = pegaEntradaDoUsuario();

echo 'Digite o valor 02: ';
$valorDois = pegaEntradaDoUsuario();

echo "Você digitou os valores: {$valorUm} e ${valorDois}" . PHP_EOL;
echo "
Escolha uma das seguintes operações:
1 - Soma
2 - Subtração
3 - Multiplicação
4 - Divisão
>>> ";

$operacao = pegaEntradaDoUsuario();
$resultado = realizaOperacao($valorUm, $valorDois, $operacao);

echo is_null($resultado) ? "Opa. Esta não é a operação que você procura" : "O resultado é: {$resultado}";