<?php

$server = 'https://quesadilla.orgfree.com/pma';
$username = '1407902';
$password = 'Jonalex.554';
$database = '1407902';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
