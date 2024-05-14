<?php
$dbhost = 'gaiagarden.c524e08e8yjz.us-east-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'gaia_plant';
$username = 'nbuser';
$password = 'yoonghow';
$charset = 'utf8' ;

$conn = mysqli_connect($dbhost, $username, $password, $dbname, $dbport);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

