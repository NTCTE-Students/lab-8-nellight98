<?php

class SessionManager {
    private $sessionData = [];

    public function __construct() {
        session_start();
    }

    // Запись данных в сессию
    public function setSessionData($key, $value) {
        $_SESSION[$key] = $value;
        $this->sessionData[$key] = $value;
    }

    // Получение данных из сессии
    public function getSessionData($key) {
        return isset($this->sessionData[$key]) ? $this->sessionData[$key] : null;
    }

    // Удаление данных из сессии
    public function removeSessionData($key) {
        if (isset($this->sessionData[$key])) {
            unset($_SESSION[$key]);
            unset($this->sessionData[$key]);
        }
    }
}

// Пример использования
$sessionManager = new SessionManager();
$sessionManager->setSessionData("username", "Nellight");
print("Имя пользователя из сессии: " . $sessionManager->getSessionData("username") . "<br>");
$sessionManager->removeSessionData("username");
print("Имя пользователя после удаления: " . $sessionManager->getSessionData("username") . "<br>");