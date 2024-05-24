<?php
    // mo ta interface chi chua cac phg thuc 'kh co noi dung'
    interface Animal{
        function eat();
        function travel();
        
    }

    // lop trien khai
    class Dog implements Animal{
        function eat(){
            echo "<h2> Dog eating...";
        }
        function travel(){
            echo "<h2> Dog traveling...";
        }
    }

    class Cat implements Animal{
        function eat(){
            echo "<h2> Cat eating...";
        }
        function travel(){
            echo "<h2> Cat traveling...";
        }
    }

    $dog = new Dog();
    echo $dog->eat();
    echo $dog->travel();

    echo "<hr>";

    $cat = new Cat();
    echo $cat->eat();
    echo $cat->travel();


?>