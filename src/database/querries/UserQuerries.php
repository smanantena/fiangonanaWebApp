<?php

namespace App\Database\Querries;


use PDO;
use App\Database\DatabaseManager;
use App\Models\User;

// require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

class UserQuerries
{
    private static $tableName = "users";
    public static function getAllUsers(): array
    {
        $databaseManager = new DatabaseManager();

        return $databaseManager->getPDO()->query("SELECT * FROM " . self::$tableName)->fetchAll(PDO::FETCH_CLASS, "App\Models\User");
    }

    public static function getUserByEmail(string $email): array
    {
        $databaseManager = new DatabaseManager();
        $query = $databaseManager->getPDO()->prepare("SELECT * FROM " . self::$tableName . " WHERE user_email = :email");
        $query->execute([
            "email" => htmlentities($email)
        ]);

        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\User");
    }

    public static function getUsersByRole(string $role): array
    {
        $role_array = [
            "admin" => 1,
            "user" => 2,
            "moderator" => 3
        ];

        $role_search = (array_key_exists($role, $role_array)) ? $role_array[$role] : 'user';

        $databaseManager = new DatabaseManager();
        $query = $databaseManager->getPDO()->prepare("SELECT * FROM " . self::$tableName . " WHERE user_role = :role");
        $query->execute([
            'role' => $role_search
        ]);

        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\User");
    }

    public static function getUsersIds(): array
    {
        $databaseManager = new DatabaseManager();
        return $databaseManager->getPDO()->query("SELECT user_id FROM " . self::$tableName)->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function getUserById(int $id) : array
    {
        $databaseManager = new DatabaseManager();
        $query = $databaseManager->getPDO()->prepare("SELECT * FROM " . self::$tableName . " WHERE user_id = :id");
        $query->execute([
            "id" => $id
        ]);
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\User");
    }
}
