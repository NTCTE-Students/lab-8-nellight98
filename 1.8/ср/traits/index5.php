<?php

trait Authenticatable {
    public function login($username, $password) {
        // Симуляция авторизации
        if ($username === "admin" && $password === "password") {
            echo "Авторизация успешна!<br>";
        } else {
            echo "Неверное имя пользователя или пароль!<br>";
        }
    }

    public function logout() {
        echo "Выход из системы!<br>";
    }
}

class User {
    use Authenticatable;
}

// Тестирование
$user = new User();
$user->login("admin", "password");
$user->login("user", "pass");
$user->logout();