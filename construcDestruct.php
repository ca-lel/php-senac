<?php
echo 'Digite: ';
$input = rtrim(fgets(STDIN));
echo $input;

/* class Classe1 {
    
    private function __construct() {
        echo "new OBJ" . __CLASS__ . PHP_EOL;
    }
    
    public function __destruct() {
        echo "End of OBJ". __CLASS__ . PHP_EOL;
    }

    protected static final function getInstance() {
        return new self();
    }
}

class Classe2 extends Classe1 {
    public $a = NULL;

    function __construct($a) {
        parent::getInstance();
        $this->a = $a;
        echo "new OBJ". __CLASS__ . PHP_EOL;
    }
    
    function __destruct() {
        echo "End of OBJ" . PHP_EOL;
    }
}

$obj = new Classe2('a');
echo "end of script". PHP_EOL; */