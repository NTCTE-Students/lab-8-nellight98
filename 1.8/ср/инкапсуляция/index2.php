<?php

class User {
    private $username;
    private $passwordHash;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->setPassword($password);
    }

    // Установка пароля с использованием хеширования
    public function setPassword($password) {
        $this->passwordHash = password_hash($password, PASSWORD_BCRYPT);
    }

    // Проверка пароля
    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }
}

// Пример использования
$user = new User("JohnDoe", "mySecurePassword123");

if ($user->checkPassword("mySecurePassword123")) {
    print("Пароль верный!<br>");
} else {
    print("Пароль неверный!<br>");
}