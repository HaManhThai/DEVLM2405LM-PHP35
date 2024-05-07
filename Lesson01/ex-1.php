<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu về PHP</title>
</head>
<body>
    <?php
        // ma nguon php
        echo "<h1> Giới thiệu về PHP</h1>";
        echo "<p> Biến, Hằng, Kiểu dữ liệu,... </p>";
   

        // khai báo biến
        $name = "Hà Mạnh Thái";
        $age = 21;
        print_r($name);
        print_r("<br>");
        print_r($age);
        // hằng
        define("PI",3.14444444);
        echo "<p> Hằng PI </p>" .PI;


        $a = "Hello";
        $b = "$a World";
        $c = '$a World';

        // print_r(<p> . $a);
        // print_r(<p> . $b);
        // print_r(<p> . $c);

    ?>
</body>
</html>