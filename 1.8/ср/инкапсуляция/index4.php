<?php

class Counter {
    private $count;

    public function __construct($initialCount = 0) {
        $this->count = $initialCount;
    }

    // Увеличение счетчика
    public function increment() {
        $this->count++;
    }

    // Уменьшение счетчика (без ухода ниже нуля)
    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    // Получение текущего значения счетчика
    public function getCount() {
        return $this->count;
    }
}

// Пример использования
$counter = new Counter();
print("Текущее значение счетчика: " . $counter->getCount() . "<br>");
$counter->increment();
print("После увеличения: " . $counter->getCount() . "<br>");
$counter->decrement();
print("После уменьшения: " . $counter->getCount() . "<br>");