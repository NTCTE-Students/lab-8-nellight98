<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo() {
        print("{$this->name}, зарплата: {$this->salary} рублей<br>");
    }
}

class Manager extends Employee {

    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
    public function manageTeam() {
        print("{$this->name} управляет командой.<br><br>");
    }
}

class Developer extends Employee {

    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
    public function writeCode() {
        print("{$this->name} пишет код.<br><br>");
    }
}

class Designer extends Employee {

    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
}


$manager = new Manager('Тайгер Дергал', 20000);
print("Информация о менеджере: ");
$manager->getInfo();
$manager->manageTeam();

$developer = new Developer('Программист Виталя', 18000);
print("Информация о разработчике: ");
$developer->getInfo();
$developer->writeCode();

$designer = new Designer('Сынша Аурмы', 19000);
print("Информация о дизайнере: ");
$designer->getInfo();
?>