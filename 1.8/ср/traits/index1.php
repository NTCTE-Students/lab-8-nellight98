<?php

trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $this->log("Пользователь {$name} создан.");
    }
}

// Тестирование
$user = new User();
$user->createUser("Иван");