<?php

abstract class Order {
    abstract public function calculateTotal();
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        print("Расчет стоимости онлайн-заказа с учетом скидок и налогов<br>");
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        print("Расчет стоимости заказа в магазине с учетом скидок и налогов<br>");
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        print("Расчет стоимости заказа по телефону с учетом скидок и налогов<br>");
    }
}

// Тестирование
$onlineOrder = new OnlineOrder();
$onlineOrder->calculateTotal();

$storeOrder = new StoreOrder();
$storeOrder->calculateTotal();

$telephoneOrder = new TelephoneOrder();
$telephoneOrder->calculateTotal();