<?php

class Db
{

    protected PDO $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO(
            'pgsql:host='. $_ENV['DB_HOST'] .
            ';dbname=' . $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD']);
    }

    public function query($sql, $class): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

}