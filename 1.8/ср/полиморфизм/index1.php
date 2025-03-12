<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка push-уведомления: {$message}<br>");
    }
}

// Тестирование
$emailNotifier = new EmailNotifier();
$emailNotifier->send("Привет, это тестовое сообщение!");

$smsNotifier = new SMSNotifier();
$smsNotifier->send("Ваш заказ готов!");

$pushNotifier = new PushNotifier();
$pushNotifier->send("Новое уведомление!");