<?php

class Animal {
    public $name;

    public function getInfo() {
        print("Название животного: {$this->name}<br>");
    }
    public function __construct($name) {
        $this->name = $name;
    }
}

class Bird extends Animal {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function fly() {
        print("{$this->name} летает.<br>");
    }
}

// Производный класс Fish
class Fish extends Animal {
    public function __construct($name) {
        parent::__construct($name);
    }

    // Уникальный метод swim()
    public function swim() {
        print("{$this->name} плавает.<br>");
    }
}

// Производный класс Mammal
class Mammal extends Animal {
    public function __construct($name) {
        parent::__construct($name);
    }
}

// Примеры использования классов
$bird = new Bird('Сокол');
print("Информация о птице: ");
$bird->fly();
print("<br>");

$fish = new Fish('Щука');
print("Информация о рыбе: ");
$fish->swim();
print("<br>");

$mammal = new Mammal('Лев');
print("Информация о млекопитающем: ");
$mammal->getInfo();
print("<br>");
?>