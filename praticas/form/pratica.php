<h1>Ola, mundo</h1>
<code>
    <pre>
        <?php
        /**
         * $_POST -> variável super global. Exclusiva para obtenção de dados
         * provindos de um formulário que utiliza o método POST, do HTTP. 
         * Array Associativo
         * $_POST = [
         *  "inputName1" => value,
         *  "inputName2" => value,
         *  "inputName3" => value,
         *  "inputName4" => value
         * ]
         * As chaves deste array, são os "name" dos inputs.
         */
        extract($_POST);
            
        switch ($nomeInput) { // switch-case
            case 'Caio': // primeiro if
                echo 'Caio é legal';
                break;
                
            case '': // elseif
                echo 'Campo vazio';
                break;

            default: // else
                echo 'Batata doce é legalzinha';
                break;
        }
        
        ?>
    </pre>
</code>
