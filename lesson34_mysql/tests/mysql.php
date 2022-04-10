<?php

$mysql = new PDO('mysql:host=localhost;dbname=crud_mvc_pdo;charset=utf8;','root','');
$mysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


///** @var PDOStatement $result */
//$result = $mysql->prepare("SELECT * FROM cats where id=?");
//$result->execute([5]);

/** @var PDOStatement $result */
$result = $mysql->prepare("SELECT * FROM cats");
$result->execute();


//fetch all users form Mysql program and create from this php associative array
$data = $result->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($data);