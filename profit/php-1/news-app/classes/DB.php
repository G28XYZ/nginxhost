<?php

class DB {

  protected $dbh;

  public function __construct()
  {
    $this->dbh = include(__DIR__ . './../db/db-config.php');
  }
  
  public function execute(string $sql) {
    $sth = $this->dbh->prepare($sql);
    if($sth) {
      return true;
    }
    return false;
  }

  public function query(string $sql, array $data=[]) {
    $sth = $this->dbh->prepare($sql);
    if($sth->execute($data)) {
      return $sth->fetchAll() ?? false;
    }
    return false;
  }

}