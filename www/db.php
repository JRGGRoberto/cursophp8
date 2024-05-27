<?php
$host = "db";
$username = "root";
$password = "root";
$db = "teste";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Conectado com sucesso. Base: ". $db ."<h2>";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

echo '<a href="../" class="btn btn-primary btn-sm">Voltar</a>'

?>

