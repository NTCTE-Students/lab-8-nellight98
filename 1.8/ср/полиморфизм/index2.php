<?php

abstract class Payment {
    abstract public function process();
}

class CreditCardPayment extends Payment {
    public function process() {
        print("Оплата кредитной картой<br>");
    }
}

class PayPalPayment extends Payment {
    public function process() {
        print("Оплата через PayPal<br>");
    }
}

class BankTransferPayment extends Payment {
    public function process() {
        print("Оплата банковским переводом<br>");
    }
}

// Тестирование
$creditCardPayment = new CreditCardPayment();
$creditCardPayment->process();

$paypalPayment = new PayPalPayment();
$paypalPayment->process();

$bankTransferPayment = new BankTransferPayment();
$bankTransferPayment->process();