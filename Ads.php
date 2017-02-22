<?php
require_once('Publication.php');
class Ads extends Publication
{

	public $time = false;
    public function draw()
    {
    	if($this->time) {echo '<p>' . $this->content .'<br/>'. $this->author . ' [не актуально]</p>';}
    	else {
    		echo '<p>' . $this->content .'<br/>'. $this->author . '</p>';
    	}
    	
    }
    // public function getViewsCount()
    // {
    //     echo $this->time;
    // }
}
    $ads = new Ads('', 'Антон.', '', 'Продам слона! Срочно. Дёшево.');
    $ads2 = new Ads('', 'Маша.', '', 'Отдам котика в хорошие руки.');
    $ads3 = new Ads('', 'Кирилл.', '', 'Вишнёвая девятка в отличном состоянии.<br/> Куплю.');

    
    $ads->draw();
    $ads2->draw();
    $ads3->time = true;
    $ads3->draw();
