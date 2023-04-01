<?php

class Book{
    public $title;
    public $description;
    public $author;

    public function __construct($title,$description,$author)
    {
        $this->title=$title;
        $this->description=$description;
        $this->author=$author;
    }
}

?>