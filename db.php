<?php

//Подключение к базе данных

const DBUSER = 'root';
const HOST = 'localhost';
const DBPASS = '1234';
const DBNAME = 'Users';

try {
    $pdo=new  PDO('mysql:host='.HOST.';dbname='.DBNAME, DBUSER, DBPASS);
} catch (PDOException $e) {
    exit($e->getMessage());
}
