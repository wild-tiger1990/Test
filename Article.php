<?php
require_once('Publication.php');
class Ads extends Publication
{
    private $views = 10;
    public function draw()
    {
        echo $this->title .'<br/>'. $this->author .' / '. $this->publicationDate .'<br/>'.'----------------------------------------------------------------------'. $this->content;
    }
    public function getViewsCount()
    {
        echo 'Просмотров: ' . $this->views;
    }
}
    $ads = new Ads('*** Основы ООП ***', 'Г. Буч', '01.01.2016', '<p>1) объектно-ориентированное программирование использует в качестве основных логических конструктивных элементов объекты, а не алгоритмы;</p>
<p>2) каждый объект является экземпляром определенного класса;</p>
<p>3) классы образуют иерархии. Программа считается объектно-ориентированной, только если выполнены все три указанных требования.</p>');


    
    $ads->draw();
    echo $ads->getViewsCount();

    