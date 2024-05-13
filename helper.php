<?php
$dbhost = 'gaiadb.c524e08e8yjz.us-east-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'GaiaData';
$username = 'nbuser';
$password = 'nbuser';
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}