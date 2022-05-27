<?php
// class color {
//     public static $color ="red";
//     public static function getColor(){
//             return self::$color;
//     }  
// }
// echo color::getColor();
class student {
    public $name;
    private $email;
    protected $favorites;
    private static $school= "CG";
    function __construct($name, $email, $favorites){
        $this->name = $name;
        $this->email = $email;
        $this->favorites = $favorites;
    }
    public function getEmail(){
        return $this->email;
    }
    public static function getSchool(){
        return self::$school;
    } 
}
$student = new Student("vinh","email@abc.com","games");
echo $student->name ;
echo "<br>";
echo $student->getEmail();
echo "<br>";
// echo $student->favorites;
echo student::getSchool();