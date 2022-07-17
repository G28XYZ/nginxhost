<?php

$dbh = new PDO('mysql:host=localhost;dbname=php1', 'root', '');

$sql = 'SELECT * FROM persons WHERE id=:id';

$sth = $dbh->prepare($sql);

$sth->execute([':id' => $_GET['id']]);
$data = $sth->fetchAll();

var_dump($data);