<?php
$dsn = 'mysql:host=localhost;dbname=karon15';
$uname = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $uname, $password, $options);
} catch(PDOException $e) {
}