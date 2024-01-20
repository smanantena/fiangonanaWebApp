<?php

namespace App\Database;

use Exception;
use PDO;

class DatabaseManager extends PDO
{
    private static $pdo;

    public function __construct(string $host = "localhost", string $dbname = "tranokala_fiangonana", string $username = "root", string $password = null)
    {
        if (is_null(self::$pdo)) {
            try {
                self::$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
            } catch (Exception $e) {
                
                echo $e->getMessage();
            }
        }
    }

    public function getPDO(): ?object
    {
        return self::$pdo;
    }
}
