<?php
require_once('Publication.php');
class News extends Publication
{
    public $important = false;
    public function draw() 
    {
        if ($this->important) 
            echo '! ';
        echo $this->publicationDate . ' - ' . $this->content . '<br/>';
    }

}
	$news1 = new News('', '', '15.02.2016', 'Начало курса “Веб-разработка на PHP. Продвинутый курс”.');
    $news2 = new News('', '', '14.02.2016', 'ПСЖ разгромил фаворита Лиги чемпионов со счетом 4:0.');
    $news1->draw();
    $news2->important = true;
    $news2->draw();
