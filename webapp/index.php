<?php
$connection = new PDO("mysql:host=database;dbname=mydb;charset=UTF8", "root", "password");
$messagesStatement = $connection->prepare("SELECT * FROM messages");
$messagesStatement->execute();
$results = $messagesStatement->fetchAll();

echo "<h2>Below are messages from MySQL:</h2>";
foreach($results as $result){
    echo "<div>" . $result["message"] . "</div>";
}
?>