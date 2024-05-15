<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài 4</title>

    <style>
        #main {
            margin: 0 auto;
            height: 35px;
            width: 800px;
            background: #ccc;

        }

        #main ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #main ul li {
            float: left;
            border-right: solid 1px #fff;
        }

        #main ul li a {
            padding: 8px 15px;
            text-decoration: none;
            color: #000;
            display: block;
        }

        #main ul li a:hover,
        .selected {
            background: #792b90;
            color: #fff !important;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="">Trang chủ</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="">Sản phẩm</a></li>
        <li><a href="">Dịch vụ</a></li>
        <li><a href="">Liên hệ</a></li>
    </ul>
</body>

</html>