<?php
    // lấy dữ liệu trên form: $_POST
    echo "dùng get";
    $taiKhoan = $_GET["txtTaiKhoan"];
    $matKhau = $_GET["txtMatKhau"];

    echo "<h1> Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
?>