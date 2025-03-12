<?php

class Thermostat {
    private $temperature;

    public function __construct($temperature = 20) {
        $this->setTemperature($temperature);
    }

    // Установка температуры с ограничением диапазона
    public function setTemperature($temperature) {
        if ($temperature < -50 || $temperature > 100) {
            throw new InvalidArgumentException("Температура должна быть в диапазоне от -50 до 100 градусов.");
        }
        $this->temperature = $temperature;
    }

    // Получение текущей температуры
    public function getTemperature() {
        return $this->temperature;
    }
}

// Пример использования
try {
    $thermostat = new Thermostat(25);
    print("Текущая температура: " . $thermostat->getTemperature() . "°C<br>");
    $thermostat->setTemperature(30);
    print("Новая температура: " . $thermostat->getTemperature() . "°C<br>");
} catch (Exception $e) {
    print("Ошибка: " . $e->getMessage() . "<br>");
}