<?php
require_once 'Config.php';
require_once 'Client.php';

//CREATE TABLE clients (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL
//);

$clients = array();

try {
    $driver = sprintf(
        "mysql:host=%s;port=%s;dbname=%s",
        Config::HOST,
        Config::PORT,
        Config::DATABASE
        );

    $pdo = new PDO(
        $driver,
        Config::LOGIN,
        Config::PASSWORD);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $pdo->exec("INSERT INTO clients (firstname, lastname) VALUES ('jane', 'die');");
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

//    var_dump($stmt);
} catch (PDOException $e) {
    var_dump($e->getMessage());
//    var_dump("Bad credentials");
} finally {
    $pdo = null;
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clients as $client): ?>
    <tr>
        <td><?= $client->getId() ?></td>
        <td><?= $client->getFirstname() ?></td>
        <td><?= $client->getLastname() ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>