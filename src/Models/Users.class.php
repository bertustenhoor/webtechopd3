<?php

declare(strict_types=1);

namespace Models;
use Models\Dbh;

include_once 'Dbh.class.php';

class Users extends Dbh
{
    protected function getUser($naam): array
    {
        $sql = "SELECT * FROM users WHERE name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naam]);
        // Use fetch() for 1 row, and fetchAll() for all rows
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    protected function setUser($naam, $email, $password): void
    {
        $sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$naam, $email, $password]);
    }
}
