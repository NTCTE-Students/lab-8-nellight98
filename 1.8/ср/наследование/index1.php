<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        print("{$this->year} {$this->make} {$this->model}");
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function getInfo() {
        parent::getInfo();
        print(", Количество дверей: {$this->doors} <br><br>");
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }

    public function getInfo() {
        parent::getInfo();
        print(", Тип: {$this->type}<br><br>");
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }

    public function getInfo() {
        parent::getInfo();
        print(", Грузоподъемность: {$this->loadCapacity} тонн<br><br>");
    }
}

$car = new Car('Toyota', 'Corolla', 2010, 4);
print("Информация об автомобиле: ");
$car->getInfo();

$bike = new Bike('Yamaha', 'YZF-R6', 2008, 'Спортивный');
print("Информация о мотоцикле: ");
$bike->getInfo();

$truck = new Truck('Volvo', 'FH16', 2015, 40);
print("Информация о грузовике: ");
$truck->getInfo();
?>