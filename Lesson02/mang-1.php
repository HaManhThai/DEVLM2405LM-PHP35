<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng trong PHP</title>
</head>
<body>
    <h1>Mảng số</h1>
    <?php
        $arr = array("Xin", "chào", "bạn"); // cách khai báo thong thuong
        echo "<p>$arr[0]";
        echo "<p>$arr[1]";
        echo "<p>$arr[2]";

        echo "<hr>";

        $arr = array(5=>"Xin", "chào", "bạn"); //
        echo "<p>$arr[5]";
        echo "<p>$arr[6]";
        echo "<p>$arr[7]";

        echo "<hr>";

        $arr = array(5=>"Xin", "chào", "bạn"); //
        echo "<p> $arr[5]";
       // echo "<p>$arr[]";
       // echo "<p>$arr[]";


       echo "<hr>";

       $names[0] = "Trịnh"; // cách khai báo nói luôn phần tử
       $names[1] = "Văn";
       $names[2] = "Chung";
       echo "<h3> Xin chào:$names[0] $names[1] $names[2] </h3>";

    // loại key(chuỗi): value
       echo "<hr>";
       $countries = array("us" => "United State",
                         "uk" => "United Kingdom",
                        "vn" => "Viet nam",
                            "cn" => "CHina");

        echo "<hr>";

        echo "Mảng nhiều chiều";
        $products = array(
                        array("100", "Iphone", 1200),
                        array("101", "Samsung", 1000),
                        array("102", "LG", 200),
                        array("103", "ABC", 1500),
        );
        echo "<p>" . $products[0][0];   


        echo "Danh sách </p>";
        for($row =0;$row <4;$row++){
            for($col =0;$col <3;$col++){
                echo $products[$row][$col] . " ";
            }
            echo "<p>";
        }


        echo "<hr>";
        // các hàm thao tác mảng
        echo "<p> Số phần tử: " . count($products); // 1, hàm count($products): ham so phan tu trong mang
        echo "<p> " . is_array($products); // 2, hàm is_array($products: ham kiem tra xem có la mang  kh

        echo "<hr>";
        $arr = array("a" => "chó", "b" => "mèo" , "c" =>"Horce");
        echo "<p> " . $arr["d"];

        if(array_key_exists("d",$arr)) { // 3, array_key_exists("d",$arr): ham kiem tra xem có ton tai key khong
            echo "<p> " . $arr["d"];
        }else {
            echo "<p> khong ton tai key la \"d\"";
        }

        // 4, hàm array_keys:
        $arr = array("a" => "chó", "b" => "mèo" , "c" =>"Horce");
        foreach(array_keys($arr) as $key){
            echo "<p> ". $key;
        }

        echo "<hr>";
        print_r(array_keys($arr)); // in ra data chuẩn kiểu hơn echo
    ?>
</body>
</html>