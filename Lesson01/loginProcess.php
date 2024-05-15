<?php
    // lấy dữ liệu trên form: $_POST
    echo "dùng post";
    $taiKhoan = $_POST["txtTaiKhoan"];
    $matKhau = $_POST["txtMatKhau"];

    echo "<h1> Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
    

    echo '<hr>';
?>

<!-- <?php
    // lấy dữ liệu trên form: $_POST
    echo "dùng request";
    $taiKhoan = $_REQUEST["txtTaiKhoan"];
    $matKhau = $_REQUEST["txtMatKhau"];

    echo "<h1> Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
?> -->