<?php
class User {
    private $id;
    private $username;
    private $password;
    private $role;

    public function __construct($id, $username, $password, $role)
    {
        $this->id = $id;
        $this->username = $username;
        $this->setPassword($password);
        $this->role = $role;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function __toString()
    {
        return "User ID: {$this->id}, Username: {$this->username}, Role: {$this->role}";
    }
}
?>
