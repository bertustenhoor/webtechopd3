<?php

declare(strict_types=1);

  class Dbh {
    private String $dh = './../data/shareboard.sqlite';
//    private $user = 'root';
//    private $pwd = '';
//    private $dbName = 'shareboard';

    protected function connect(): \PDO
    {
//      $dsn = 'sqlite://' . $this->host . '/' . $this->dbName . 'sqlite';
//      $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo = new PDO("sqlite:{$this->dh}");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $pdo;
    }

    protected function getUser($naam): array
    {
        $sql = "SELECT * FROM users WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naam]);
        // Use fetch() for 1 row, and fetchAll() for all rows
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
  }
