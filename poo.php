<?php
// Programação Orienteda a Objetos - OOP

// Int, Float, Boolean, String -> Tipos de dados nativos (definidos pela linguagem, ou Built-in).
// Classe -> É um tipo de dado artificial (definidos pelo programador)

/**
 * Visibilidade -> acesso aos atributos e métodos de uma classe
 *  public -> TODOS tem acesso
 *  private -> APENAS podem ser acessados DENTRO DA CLASSE.
 *  protected -> APENAS podem ser acessados DENTRO DA CLASSE ou PELAS CLASSES FILHAS.
 */

class Pessoa {
    // Superclasse (Classe mãe)
    // Atributos ou Propriedades
    // Visibilidade de atibutos é obrigatória!
    public $nome;
    protected $idade;
    private $cpf, $rg;

    public function __construct($n, $c) {
        // É chamado toda vez que a classe é instanciada.
        // chamado implicitamente.
        $this->nome = $n;
        $this->cpf = $c;
        echo 'Um objeto da classe ' . __CLASS__ . ' foi criado!' . PHP_EOL;
        echo 'Olá! Eu sou um objeto, e meu nome é: '. $this->nome . PHP_EOL;
    }

    public function __destruct() {
        /**
         * Executa em duas ocasiões
         * 1 - O script acaba.
         * 2 - O objeto é destruído.
         */
        echo "Destrutor da classe " . __CLASS__ . " foi executado" . PHP_EOL;
    }

    // Métodos
    // Visibilidade de método é opcional!
    // Se for omitida, a visibilidade será PUBLIC
    public function imprimeCPF() {
        echo $this->cpf . PHP_EOL;
    }
    
    public function dizOi() {
        echo 'Oi!';
    }
}

class Estudante extends Pessoa {
    // Subclasse (Classe filha)
    public function __construct($n, $c) {
        parent::__construct($n, $c);
    }
}

$obj = new Pessoa(
    c:'11111111111',
    n:'Caio'
); // instanciando a classe Pessoa (criando um novo objeto do tipo Pessoa)
// $obj2 = new Pessoa('Marcos', '22222222222'); // instanciando a classe Pessoa (criando um novo objeto do tipo Pessoa)
// $objEstudante = new Estudante('Caio', '11111111111');
// echo $objEstudante->imprimeCPF();
$obj = 10;
// var_dump($objEstudante);
echo "Fim do Script." . PHP_EOL;