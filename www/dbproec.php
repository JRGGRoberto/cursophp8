<?php
$host = "db";
$username = "unespar_sistema";
$password = "senhaTESTE";
$db = "unespar_sistema";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Conectado com sucesso. Base:". $db ."<h2>";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

echo '<a href="../" class="btn btn-primary btn-sm">Voltar</a>'

?>




docker exec -i mysql mysql -uunespar_sistema -psenhaTESTE unespar_sistema < db.sql
No linha:1 caractere:75
+ ... i mysql mysql -uunespar_sistema -psenhaTESTE unespar_sistema < db.sql