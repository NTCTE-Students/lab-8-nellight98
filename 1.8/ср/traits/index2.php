<?php

trait Timestampable {
    public $createdAt;
    public $updatedAt;

    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }

    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Post {
    use Timestampable;
}

class Comment {
    use Timestampable;
}

// Тестирование
$post = new Post();
$post->setCreatedAt("2023-01-01 10:00:00");
$post->setUpdatedAt("2023-01-01 11:00:00");

$comment = new Comment();
$comment->setCreatedAt("2023-01-02 12:00:00");
$comment->setUpdatedAt("2023-01-02 13:00:00");

echo "Post created at: " . $post->getCreatedAt() . "<br>";
echo "Post updated at: " . $post->getUpdatedAt() . "<br>";
echo "Comment created at: " . $comment->getCreatedAt() . "<br>";
echo "Comment updated at: " . $comment->getUpdatedAt() . "<br>";