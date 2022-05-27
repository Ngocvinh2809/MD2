<?php
class Point2D{
    public float $x;
    public float $y;
    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setX(float $x){
        $this->x = $x;
    }
    public function setY(float $y){
        $this->y =$y;
    }
    public function setXY(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        return [$this->x,$this->y];
    }
    public function toString(){
       return "x là : ".$this->x." y là : ".$this->y; 
    }
}

class Point3D extends Point2D{
    public float $z ;
    public function __construct(float $x, float $y, float $z){
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setXYZ(float $x, float $y, float $z){
        $this->z = $z;
        $this->x = $x;
        $this->y = $y;
    }
    public function getXYZ(){
        return [$this->x,$this->y,$this->z];
    }
    public function toString(){
        return  "x là : ".$this->x." y là : ".$this->y." z là : ".$this->z;
    }
}
// $point2D = new Point2D(10,20);
// echo $point2D->toString();
// echo "<pre>";
// print_r($point2D->getXY());
$point3D = new Point3D(10,20,30);
echo $point3D->toString();
echo "<pre>";
print_r($point3D->getXYZ());
print_r($point3D->getXY());








