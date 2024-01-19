<?php
namespace Data;

class UserGenerator
{
    public static function generatePassword (string $toCrypt) : string
    {
        return password_hash($toCrypt, PASSWORD_DEFAULT);
    }

    public static function verifyPassword (string $hash, string $password_text) : bool
    {
        return password_verify($password_text, $hash);
    }
}
