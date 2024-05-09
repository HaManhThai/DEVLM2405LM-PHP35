<?php
// b1:
    echo '<h1> Học Lập trình Web tại DEVMASTER </h1>';
    echo '<p> Làm quen với HTML';
    echo '<p> Các thẻ html cơ bản';
    echo '<p> làm việc với CSS';
    echo '<p> làm việc với Javasccript';
    echo '<p> làm việc với Jqquery';
    echo '<p> Kết nối CSDL MySQL';
    echo '<p> Framework MVC trong PHP';
?>

<?php
    echo '<hr>';
?>

<?php
// b2:
    echo '<h1> Khai báo sử dụng biến trong PHP </h1>'. '<br>';

    echo '<p> Khai báo biến a = 11.5'.'<br>';
        $a =11.5;

    echo '<p> kiểu giá trị của biến a là: '. gettype($a). '<br>';   

    echo '<p> chuyển đổi kiểu dữ liệu của biến a về kiểu số nguyên'.'<br>';
        $a = (int)$a;

    echo '<p> biến a đã chuyển đổi từ kiểu double về kiểu nguyên'.'<br>';
        echo gettype($a);

    echo '<p> chuyển đổi biến a về double từ int của biến a'.'<br>';
        $a = (double)$a;

    echo "<p> biến sau khi đã chuyển đổi có giá trị là:  $a và kiểu: ". gettype($a).'<br>';

    echo '<p> chuyển đổi biến a từ kiểu double sang kiểu String'.'<br>';
        $a = (string)$a;

    echo "<p> Biến a sau khi đã chuyển đổi từ kiểu double sang String có giá trị $a và kiểu dữ liệu: " .gettype($a).'<br>';
?>