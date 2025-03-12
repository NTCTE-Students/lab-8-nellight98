<?php

abstract class Document {
    abstract public function save();
}

class PDFDocument extends Document {
    public function save() {
        print("Сохранение документа в формате PDF<br>");
    }
}

class WordDocument extends Document {
    public function save() {
        print("Сохранение документа в формате Word<br>");
    }
}

class ExcelDocument extends Document {
    public function save() {
        print("Сохранение документа в формате Excel<br>");
    }
}

// Тестирование
$pdfDocument = new PDFDocument();
$pdfDocument->save();

$wordDocument = new WordDocument();
$wordDocument->save();

$excelDocument = new ExcelDocument();
$excelDocument->save();