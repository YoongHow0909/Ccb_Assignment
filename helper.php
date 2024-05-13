<?php
$dbhost = 'gaiagarden.c524e08e8yjz.us-east-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'gaia_plant';
$username = 'nbuser';
$password = 'yoonghow';
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}