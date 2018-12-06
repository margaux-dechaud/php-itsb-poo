<?php
//CREATE TABLE clients (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL
//);

$host = '172.17.0.3'; // 'localhost';
$port = 3306;
$database = 'test';

$clients = array();

class Client {
    private $id;
    private $firstname;
    private $lastname;

    public function __construct(int $id, string $firstname, string $lastname) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database",
        'bibi',
        'password');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $pdo->exec("INSERT INTO clients (firstname, lastname) VALUES ('john', 'doe');");
//    var_dump("Le dernier ID est : " . $pdo->lastInsertId());

    $stmt = $pdo->query("SELECT * FROM clients;");

//    var_dump($stmt->fetchObject());

    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
        $client = new Client(
            $row['id'],
            $row['firstname'],
            $row['lastname']
        );

        $clients[] = $client;
    }

    var_dump($clients);

//    var_dump($stmt);
} catch (PDOException $e) {
    var_dump($e->getMessage());
//    var_dump("Bad credentials");
} finally {
    $pdo = null;
}
