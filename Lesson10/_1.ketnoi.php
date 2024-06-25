<?php
    // ket noi toi csld
    // su dung ham mysqli
    $conn = new mysqli("localhost","root","","demoMySQL"); // day la 1 doi tuong hay la 1 class
    if($conn -> connect_error){
        die("ket noi kh thanh cong" . $conn -> connect_error);
    }
    echo "<h2>ket noi thanh cong </h2>";
?>