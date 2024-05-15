<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm trong PHP - Hàm ng dùng tự định nghĩa</title>
</head>
<body>
    <?php
        //dịnh nghia ham:
        function fnHi($param){ // ham kh trả về giá trị (thủ tục)
            echo "<h2> Welcome to, $param";
        }
        fnHi("CHung Trịnh"); // gọi thực hiện hàm
        
        // hàm trả về giá trị:
        function fnCalc($a,$b){
            $c = $a + $b;
            return $c;
        }
        // gọi thực hiện hàm:
        echo "<p> ".fnCalc(10,12);
        echo "<p> ".fnCalc(10,14);
        echo "<p> ".fnCalc(10,15);
        echo "<p> ".fnCalc(10,16);
        echo "<p> ".fnCalc(10,33);
        

        function fnCalculator($a,$b=100){ // tham số có sẵn đặt cuối
            $c = $a + $b;
            return $c;
        }
        echo "<p> ".fnCalculator(10);

        $age =30;
        function fnBirthday(){
            $age  =22; // biến toàn cục
            echo "<p> CHúc mừng ". $age;
        }
        fnBirthday();

        function fnBirthday1(){
            global $age; // biến toàn cục
            echo "<p> CHúc mừng ". $age;
        }
        fnBirthday1();

    ?>
    
    <?php 
    echo "<hr> \n\n\n";
        // hàm date
        echo date("jS-F-Y"); // lấy ngày tháng năm hiện tại
        // hiển thị theo định dạng: ngày th - tên tháng - năm
        echo "<br>";
        echo date("M/Y"); //hiển thị tháng năm hiện tại
        echo "<br>";
        //hiển thị tháng ngày cuối cùng của tháng hiện tại
        echo "Days of " . date("M") . " is " .date("t");
        echo "<br>";
    ?>

</body>
</html>