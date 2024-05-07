<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toán tử trong php </title>
</head>
<body>
    <h1>Toán tử trong php</h1>
    <hr>
    <h2>toán tử số học : * , / , +,-,%</h2>
    <?php
        $a = 2;
        $b = 5;
        $c =$a*$b;
        echo "<p> $a * $b = $c";
        echo '<p>' . $a . "*" . $b . "=" . $c;

        $c = $a/$b;
        echo "<p> $a / $b = $c";

        $c = $a + $b;
        echo "<p> $a + $b = $c";

        $c = $a - $b;
        echo "<p> $a - $b = $c";
        
        $c = $b % $a;
        echo "<p> $b % $a = $c";
    ?>


    <hr>
    <h2>toán tử tăng giảm : ++ , -- </h2>
    <?php
        $a =2;
        $c = $a++; // gán trc cộng sau
        echo "<p> $c , $a";

        $a =2;
        $c = ++$a; // cộng trc gán sau
        echo "<p> $c , $a";


        
    ?>

    <hr>
    
    <h2>toán tử so sánh : > , <, >=,<=,==,===,!=,!== </h2>
    <?php
        // toán tử so sánh
        $a = 2;
        $b = 5;

        $c = $a  > $b; // false
        echo '<p> $c = ' . $c . ' kiểu dữ liệu: '. gettype($c);

        $c = $a  < $b; // true
        echo '<p> $c = ' . $c. ' kiểu dữ liệu: '. gettype($c);

        $x = 2.0;
        $c = $a == $x; // true
        echo '<p> $c = ' . $c; 

        $c = $a === $x; // false
        echo '<p> $c = ' . $c;  

        $c = $a != $x; // false
        echo '<p> $c = ' . $c; 
        
        $c = $a !== $x; // false
        echo '<p> $c = ' . $c;  

        echo "</hr> Toán tử điều kiện: ";

        $c = $a > 1 ? '$a lớn hơn 1': 'Sai';
        echo '<p> $c = '. $c;

        echo " </hr> <h2> Toán tử gán</h2>";

        $a = 100;
        echo '<p> $a = ' . $a;
        $a *= 2; // $a = $A *2 và kết quả là $a ==200;
        echo '<p> $a = ' . $a;

        echo " </hr> <h2> Toán tử logic: && , || , ! </h2>";
        $a = 100;
        $b = 200;
        $c = ($a >= 100) && ($b < 300); // kq là 1
        echo '<p> $a = ' . $c;

        $c = ($a >= 100) || ($b < 300); // kq là 1
        echo '<p> $a = ' . $c;

        $c = !($a >= 100); // kq là 0
        echo '<p> $a = ' . $c
    ?>


</body>
</html>