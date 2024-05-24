<?php
    // van de lop truu tuong va phg thuc truu tuong ?? 
    abstract class Shape{
        public $color;

        function setColor(){
            $this->color = $color;
            
        }
        function getColor(){
            return $this->color;
        }

        //method truu tuong
        public abstract function chuVi();
        public abstract function dienTich();
    }
    //lop trien khai
    class hinhchunhat extends Shape{
        public $cd;
        public $cr;

        function __construct($x=1,$y=2){
            $this->cdai = $x;
            $this->crong = $y;
        }
        public function chuVi(){
            return ($this->cdai + $this->crong) *2;
        }

        public function dienTich(){
            return ($this->cdai * $this->crong);
        }

    }

    $hcn = new hinhchunhat(100,200);
    echo "<h2> Chu vi: ". $hcn->chuVi();
    echo "<h2> Dien Tich: ". $hcn->dienTich();
?>