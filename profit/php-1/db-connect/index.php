<?php

$dbh = new PDO('mysql:host=localhost;dbname=php1', 'root', '');

$sql = 'SELECT * FROM news WHERE id=:id';

$sth = $dbh->prepare($sql);

$sth->execute([':id' => 1]);
$data = $sth->fetchAll();

var_dump($data);