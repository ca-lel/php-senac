<?php
// Single Responsability (Responsabilidade Única)

class Calculadora {
    private $valorUm, $valorDois, $operacao;

    public function __construct() {
        echo 'Digite o valor 01: ';
        $this->valorUm = $this->pegaEntradaDoUsuario();

        echo 'Digite o valor 02: ';
        $this->valorDois = $this->pegaEntradaDoUsuario();
    }

    private function pegaEntradaDoUsuario() {
        return rtrim(fgets(STDIN));
    }

    private function exibeResultado($resultado) {
        echo is_null($resultado) ? "Opa. Esta não é a operação que você procura" : "O resultado é: {$resultado}";
    }

    public function capturaOperacao() {
        echo "
        Escolha uma das seguintes operações:
        1 - Soma
        2 - Subtração
        3 - Multiplicação
        4 - Divisão
        >>> ";
        $this->operacao = rtrim(fgets(STDIN));
    }
    
    public function realizaOperacao() {
        /**
         * Retorna o valor de uma operação matemática,
         * baseado no valor do parâmetro $operacao. Se
         * a operação não existir, retorna null.
         * 1 - Soma
         * 2 - Subtração
         * 3 - Multiplicação
         * 4 - Divisão
         */
        
        switch ($this->operacao) {
            case 1: 
                $resultado = $this->valorUm + $this->valorDois;
                break;
                
            case 2:
                $resultado = $this->valorUm - $this->valorDois;
                break;
                
            case 3:
                $resultado = $this->valorUm * $this->valorDois;
                break;
                
            case 4:
                $resultado = $this->valorUm / $this->valorDois;
                break;
            
            default:
                $resultado = NULL;
        }
        $this->exibeResultado($resultado);
    }
}

/* $calculadora = new Calculadora();

$calculadora->capturaOperacao();

$calculadora->realizaOperacao(); */