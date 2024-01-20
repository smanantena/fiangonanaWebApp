<?php
namespace App\Models;

class User
{
    private int $user_id;
    private string $user_email;
    private string $user_password;
    private string|int $user_role;
    private string $user_name;

    public function __construct()
    {
        if (intval($this->user_role)) {

            $user_role_array = [
                "1" => "admin",
                "2" => "user",
                "3" => "moderator",
            ];
            $this->user_role = $user_role_array[strval($this->user_role)];
        }
    }

    public function verifyPassword (string $password) : bool
    {
        return password_verify($password, $this->user_password);
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of user_email
     */ 
    public function getUser_email()
    {
        return $this->user_email;
    }

    /**
     * Set the value of user_email
     *
     * @return  self
     */ 
    public function setUser_email($user_email)
    {
        $this->user_email = $user_email;

        return $this;
    }

    /**
     * Get the value of user_password
     */ 
    public function getUser_password()
    {
        return $this->user_password;
    }

    /**
     * Set the value of user_password
     *
     * @return  self
     */ 
    public function setUser_password($user_password)
    {
        $this->user_password = $user_password;

        return $this;
    }

    /**
     * Get the value of user_role
     */ 
    public function getUser_role()
    {
        return $this->user_role;
    }

    /**
     * Set the value of user_role
     *
     * @return  self
     */ 
    public function setUser_role($user_role)
    {
        $this->user_role = $user_role;

        return $this;
    }

    public function getUser_name()
    {
        return $this->user_name;
    }

    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;
        return $this;
    }
}
