<?php

interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        print("Подключение к MySQL<br>");
    }

    public function query($sql) {
        print("Выполнение запроса в MySQL: {$sql}<br>");
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        print("Подключение к PostgreSQL<br>");
    }

    public function query($sql) {
        print("Выполнение запроса в PostgreSQL: {$sql}<br>");
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        print("Подключение к SQLite<br>");
    }

    public function query($sql) {
        print("Выполнение запроса в SQLite: {$sql}<br>");
    }
}

// Тестирование
$mysqlDb = new MySQLDatabase();
$mysqlDb->connect();
$mysqlDb->query("SELECT * FROM users");

$postgreDb = new PostgreSQLDatabase();
$postgreDb->connect();
$postgreDb->query("SELECT * FROM products");

$sqliteDb = new SQLiteDatabase();
$sqliteDb->connect();
$sqliteDb->query("SELECT * FROM orders");