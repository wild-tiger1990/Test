<?php
abstract class Publication
{
    public $title;
    public $author;
    public $publicationDate;
    public $content;

    function __construct($title, $author, $publicationDate, $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationDate = $publicationDate;
        $this->content = $content;
    }
    abstract public function draw();
}
?>