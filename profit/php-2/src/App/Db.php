<?php

namespace App;

use PDO;
use App\Exceptions\ServerError;

class Db
{
    protected static $instance = null;

    protected PDO $dbh;

    public static function instance() {
        if(null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $this->dbh = new \PDO('pgsql:host=db;dbname=php2','postgres','postgres');
    }

    public function query($sql, $class, $params=[]): array
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if(!$res) {
            throw new ServerError('Error: ' . $sql);
        }
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data=[]): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function lastId() {
        return $this->dbh->lastInsertId();
    }

}
