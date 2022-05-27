<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    public function __construct($a, $b, $c){
       $this->a = $a;
       $this->b = $b;
       $this->c = $c;
    }
    public function result(){
         $delta = ($this->b*$this->b)-(4*$this->a*$this->c);
        if($delta<0){   
            echo "phương trình vô nghiệm";
            }else if($delta==0){
                echo "phương trình có nghiệm kép x1 = x2=".number_format((-$this->b/(2*$this->a)), 2);
                }else{
                    echo "phương trình có 2 nghiệm phân biệt x1 =".number_format(((-$this->b/+sqrt($delta))/2*$this->a), 2);
                    echo "<br/>";
                    echo "x2=".number_format(((-$this->b - sqrt($delta))/2*$this->a),2);
                }
    }
}
$eqution = new QuadraticEquation(6,-10,5) ;
echo $eqution->result();
?>