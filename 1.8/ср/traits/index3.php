<?php

trait Validatable {
    public function validate() {
        // Общая логика валидации
        if (empty($this->data)) {
            throw new Exception("Данные не могут быть пустыми!");
        }
        return true;
    }
}

class RegistrationForm {
    use Validatable;

    public $data;

    public function __construct($data) {
        $this->data = $data;
    }
}

class LoginForm {
    use Validatable;

    public $data;

    public function __construct($data) {
        $this->data = $data;
    }
}

// Тестирование
try {
    $registrationForm = new RegistrationForm(["username" => "user", "password" => "pass"]);
    $registrationForm->validate();
    echo "Регистрационная форма валидна!<br>";
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "<br>";
}

try {
    $loginForm = new LoginForm([]);
    $loginForm->validate();
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "<br>";
}