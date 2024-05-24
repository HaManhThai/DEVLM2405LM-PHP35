<?php
    // van de: ke thua (lop con ke thua method lop cha) ?, con ghi de method cua cha?



    // lop co so (lop cha - base class)
    class Car{
        public $mileage;
        public $color;
        public $make;
        // method
        function accelarate(){
            echo "<h2> Car is ...";
        }

        function display(){
            echo "<h3> display lop Car";
        }
    }


    // lop con - lop ke thua - deriver class
    class LuxuryCar extends Car{ // lop 'LuxuryCar' dang ke thua moi thu cua lop 'Car'
        // Thuoc tinh
        public $perks;

        // ghi de thu method
        function display(){
            echo "<h3> display lop Luxury";
        }
    }

    // sd:
    $lxy = new LuxuryCar();
    $lxy->accelarate(); // Sử dụng thử phương thức của lớp cha
    $lxy->display();

    $lxy= new Car();
    $lxy->display();


?>

