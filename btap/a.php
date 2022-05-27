<?php
    class Cha{
        
        public function xehoi(){
            echo __METHOD__;
        }
        public function xemay(){
            echo __METHOD__;
        }

    }
    class Con extends Cha {
        public function xehoi(){
            echo __METHOD__;
        }
        public function xemay(){
            echo __METHOD__;
        }
    }
    $Con = new Con();
    $Con->Xehoi();
    $Con->xemay();
?>


