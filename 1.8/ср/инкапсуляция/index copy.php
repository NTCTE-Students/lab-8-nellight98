<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    // Конструктор
    public function __construct($accountNumber, $balance = 0) {
        $this->setAccountNumber($accountNumber); // Используем сеттер для установки номера счета
        $this->setBalance($balance); // Используем сеттер для установки баланса
    }

    // Метод для пополнения счета
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    // Метод для снятия средств
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    // Геттер для номера счета
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Сеттер для номера счета
    public function setAccountNumber($accountNumber) {
        if (is_numeric($accountNumber) && strlen($accountNumber) > 0) {
            $this->accountNumber = $accountNumber;
        } else {
            throw new InvalidArgumentException("Номер счета должен быть числовым и не пустым.");
        }
    }

    // Геттер для баланса
    public function getBalance() {
        return $this->balance;
    }

    // Сеттер для баланса
    public function setBalance($balance) {
        if (is_numeric($balance) && $balance >= 0) {
            $this->balance = $balance;
        } else {
            throw new InvalidArgumentException("Баланс должен быть числовым и неотрицательным.");
        }
    }
}

// Пример использования класса
try {
    $account = new BankAccount("123456789", 1000);
    print("Номер счета: " . $account->getAccountNumber() . "<br>");
    print("Текущий баланс: " . $account->getBalance() . "<br>");

    $account->deposit(500);
    print("Баланс после пополнения: " . $account->getBalance() . "<br>");

    $account->withdraw(200);
    print("Баланс после снятия: " . $account->getBalance() . "<br>");
} catch (Exception $e) {
    print("Ошибка: " . $e->getMessage());
}
?>