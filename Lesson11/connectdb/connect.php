<?php
// 2 cach ket noi den db
    // c1: dung doi tuong new mysqli(may chu, ten dang nhap, pass, ten db)
    // c2: lm nhu phia duoi
    
    error_reporting(0);// an cac warning
    $conn =null;
    try{
       
        $db_host="localhost";
        $db_port=3306;
        $db_dbname="qlsinhvien";
        $db_user="root";
        $db_pass = "";
        $conn = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_dbname", $db_user, $db_pass); // câu lệnh có khả năng phát sinh lỗi
        echo "test xem co loi kh, chay dong nay la kh co loi ket noi";
    }catch(Exception $ex){
        die($ex -> getMessage()); // co loi thi dung luon kh chay nua   die()
    }
    
?>