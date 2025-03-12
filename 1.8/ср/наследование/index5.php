<?php

class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        print("Бренд: {$this->brand}, Модель: {$this->model}<br>");
    }
}

class Smartphone extends Device {
    public function __construct($brand, $model) {
        parent::__construct($brand, $model);
    }

    public function call() {
        print("{$this->brand} {$this->model} звонит.<br>");
    }
}

class Laptop extends Device {
    public function __construct($brand, $model) {
        parent::__construct($brand, $model);
    }

}

class Tablet extends Device {
    public function __construct($brand, $model) {
        parent::__construct($brand, $model);
    }
}

$smartphone = new Smartphone('Apple', 'iPhone 16 Pro Max');
print("Информация о смартфоне: ");
$smartphone->getInfo();
$smartphone->call();
print("<br>");

$laptop = new Laptop('Honor', 'Magicbook 15');
print("Информация о ноутбуке: ");
$laptop->getInfo();
print("<br>");

$tablet = new Tablet('Xiaomi', 'Tab 6 Pro');
print("Информация о планшете: ");
$tablet->getInfo();
print("<br>");
?>
