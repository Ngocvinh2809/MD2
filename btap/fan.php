<?php
define('slow','1');
define('medium','2');
define('fast','3');
class Fan {
    private int $speed = 1;
    private bool $on = false;
    private float $radius = 5;
    private string $color = "blue";
    public function getSpeed(){
        return $this->speed;
    }
    public function getOn(){
        return $this->on;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setSpeed($ts_speed) {
        $this->speed = $ts_speed;
    }
    public function setOn($ts_on) {
        $this->on = $ts_on;
    }
    public function setRadius($ts_radius) {
        $this->radius = $ts_radius;
    }
    public function setColor($ts_color) {
        $this->color = $ts_color;
    }
    public function toString(){
        if ($this->on==true) {
            echo "fan is on";
            echo "<br/>";
            return "tốc độ : ".$this->speed.", bán kính là : ".$this->radius.", màu sắc : ".$this->color;
        }else{
            echo "fan is off";
            echo "<br/>";
            return "bán kính là : ".$this->radius.", màu sắc : ".$this->color;
        }
    }
}
$Fan1 = new Fan();
$Fan1->setSpeed(3);
$Fan1->setOn(true);
$Fan1->setRadius(10);
$Fan1->setColor("yellow");
echo $Fan1->toString()."<br>";
$Fan2 = new Fan();
$Fan2->setSpeed(2);
$Fan2->setOn(false);
$Fan2->setRadius(5);
$Fan2->setColor("blue");
echo $Fan2->toString();

