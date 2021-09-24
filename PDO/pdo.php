<?php
// __DIR__ -> o caminho do nosso arquivo atual
// DSN -> Data Source Name
$db = __DIR__ . '/database.sqlite';
$dbh = new PDO("sqlite:{$db}");
$dbh->exec('CREATE TABLE IF NOT EXISTS usuarios (
        nome TEXT PRIMARY KEY,
        idade INTEGER NOT NULL
)');
// $sql = "INSERT INTO usuarios (nome, idade) VALUES ('Lucas', 17)";
// $stmt = $dbh->prepare($sql);
// var_dump($stmt->execute());

$sql = 'SELECT * FROM usuarios';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);

foreach($results as $result) {
    echo 'Nome: ' . $result['nome'] . ' ';
    echo 'Idade: ' . $result['idade'] . PHP_EOL;
    // var_dump($result);
}