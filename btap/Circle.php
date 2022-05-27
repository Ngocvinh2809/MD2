<?php
    class Circle{
        public int $radius;
        public $color;
        public static $Area;
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
        }
        public function toString(){
            echo $this->radius."<br>".$this->color;
        }
        public function Area(){
            return self::$Area=($this->radius*$this->radius) * pi();
        }
    }
    $circle=new Circle();
    $circle->setRadius(8);
    $circle->setColor("blue");
    echo $circle->toString()."<br>";
    echo $circle->Area()."<br>";
    class Cylinder extends Circle{
        public $height;
        public function toString(){
            return $this->height;
        }
        public function volume(){
            return parent::$Area*$this->height;     
        }
        public function setHeight($height){
            $this->height = $height;
        }
        public function getHeight(){
            return $this->height;
        }
    }
    $cylinder= new Cylinder();  
    $cylinder->setHeight(5);
    echo $cylinder->toString()."<br>";
    echo $cylinder->volume();

