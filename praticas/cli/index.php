<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <form action="index.php" method="get">
            <label for="valorUm">Valor 1:</label><br />
            <input type="number" name="valorUm" id="valorUm" /><br /><br />

            <label for="valorDois">Valor 2:</label><br />
            <input type="number" name="valorDois" id="valorDois" /><br /><br />

            <label>Operação:</label><br />
            <select name="operacao">
                <option value="999" selected>Selecione uma operação</option>
                <option value="1">Soma</option>
                <option value="2">Subtração</option>
                <option value="3">Multiplicação</option>
                <option value="4">Divisão</option>
                <option value="5">Resto de Divisão</option>
                <option value="6">Potência</option>
            </select> <br /><br />

            <button type="submit">Calcular</button>
        </form>

        <?php
        if (!empty($_GET)) {
            // extract($_GET);

            $valorUm = $_GET['valorUm'];
            $valorDois = $_GET['valorDois'];
            $operacao = $_GET['operacao'];
            $resultado = NULL;

            switch ($operacao) {
                case 1:
                    $resultado = $valorUm + $valorDois;
                    break;

                case 2:
                    $resultado = $valorUm - $valorDois;
                    break;

                case 3:
                    $resultado = $valorUm * $valorDois;
                    break;

                case 4:
                    $resultado = $valorUm / $valorDois;
                    break;

                case 5:
                    $resultado = $valorUm % $valorDois;
                    break;
                
                case 6:
                    $resultado = $valorUm ** $valorDois;
                    break;
                
                default:
                    echo "<h1 style=\"color:red\">Opa. Esta não é a operação que você procura.</h1>";
                    break;
            }

            echo is_null($resultado) ? '' : "<h1>O resultado é: {$resultado}</h1>" . PHP_EOL; 
        }
        ?>
    </body>
</html>