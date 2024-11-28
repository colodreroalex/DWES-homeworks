<?php
class Book {
    public $title;
    public $author;
    public $pages;

    public function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }
}


?>