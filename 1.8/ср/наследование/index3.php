<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        print("Название: {$this->title}, Автор: {$this->author}<br>");
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }

    public function page_amount() {
        print("Книга \"{$this->title}\" имеет {$this->pages} страниц.<br><br>");
    }
}

class Article extends Material {
    public function __construct($title, $author) {
        parent::__construct($title, $author);
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function minutes_amount() {
        print("Видео {$this->title} длится {$this->duration} минут.<br><br>");
    }
}


$book = new Book('Война и мир', 'Лев Толстой', 1225);
print("Информация о книге: ");
$book->getInfo();
$book->page_amount();

$article = new Article('Как стать успешным программистом', 'Иван Иванов');
print("Информация о статье: ");
$article->getInfo();
print("<br>");

$video = new Video('Уилл Смит ест лапшу', 'AI generated', 120);
print("Информация о видео: ");
$video->getInfo();
$video->minutes_amount();
?>