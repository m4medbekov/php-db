<?php

$host = 'localhost';
$db = 'id16205162_db';
$user = 'id16205162_root';
$pass = '2042686741Elaset!';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo 'Ошибка соединения с БД '.$e->getMessage();
}