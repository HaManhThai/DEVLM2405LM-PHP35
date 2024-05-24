<?php

// cai nay : constructor ??

    // dinh nghia lop
    class Point{
        // cac thuoc tinh
        private $x;
        private $y;

        // ham khoi tao constructor ( mang y nghia hanh dong)

        // function __construct(){ // kh tham so
        //     $this->x = 100;
        //     $this->y = 200;

        // }


        // function __construct($x,$y){ // co tham so
        //     $this->x = $x;
        //     $this->y = $y;

        // }

        function __construct($x=100,$y=300){ // co tham so mac dinh
            $this->x = $x;
            $this->y = $y;

        }


        // method
        function display(){
            echo "<h2> ($this->x , $this->y)";
        }
        
        // ham huy
        function __destruct(){
            $this->x = null;
            $this->y = null;
        }
    }

    // tao doi tuong:
    $p = new Point(100,300);
    $p->display();

    $p = new Point();
    $p->display();
    
    
    
?>