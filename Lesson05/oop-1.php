<?php

// hoc ve class ?? 

    // dinh nghia lop
    class Point{
        // cac thuoc tinh
        public $x;
        public $y;

        // behavior - cac method : phg thuc ( mang y nghia hanh dong)
        function getX(){
            return $this->x;

        }

        function getY(){
            return $this->y;     
        }

        
        function setX($px){
            return $this->x = $px;  
        }

        function setY($py){
            return $this->y = $py;  
        }

        // method
        function display(){
            echo "<h2> [$this->x , $this->y]";
        }
    }



    
    // tao obj tu lop va sdung:
    $p = new Point();
    // gan gia tri
    $p->setX(100);
    $p->setY(200);

    // lay gia tri:
    echo "<p> x = " . $p-> getX();
    echo "<p> y = " . $p-> getY();

    // goi thuc hien phg thuc cua doi tuong:
    $p-> display();
?>