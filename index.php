<?php
//CREATE TABLE clients (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL
//);

$host = '172.17.0.3'; // 'localhost';
$port = 3306;
$database = 'test';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database",
        'bibi',
        'password');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("INSERT INTO clients (firstname, lastname) VALUES ('john', 'doe');");

    var_dump("Le dernier ID est : " . $pdo->lastInsertId());

    var_dump($pdo);
} catch (PDOException $e) {
    var_dump($e->getMessage());
//    var_dump("Bad credentials");
} finally {
    $pdo = null;
}
