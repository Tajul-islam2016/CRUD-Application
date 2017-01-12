<?php

    class Calculation{
        
        public function add($val1, $val2){
            echo "Summation = ".($val1+$val2)."<br/>";
        }
        
        public function sub($val1, $val2){
            echo "Subtraction = ".($val1-$val2)."<br/>";
        }
        
        public function mul($val1, $val2){
            echo "Multiplication = ".($val1*$val2)."</br>";
        }
        
        public function div($val1, $val2){
            echo "Division = ".($val1/$val2)."</br>";
        }
    }

?>