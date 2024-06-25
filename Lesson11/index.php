<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Quản lý nội dung</title>
</head>
<body>

<!-- day la trang chinh, dung de include ca thanh phan vao, bao gom 2 loai thanh phan: 
 1. phan mac dinh luc nao cung co: header, footer,..., 
 2. cac thanh phan bam link moi ra nhu o nav: home , ...-->
    <?php
        include('connectdb/connect.php');
    ?>
    <?php
        include('views/header.php');
    ?>

   
   

    



    <section id ="body-content" class="container">
        <?php
            if(isset($_GET['view'])){ 
                $page = $_GET['view'];
                include_once('views/' . $page. '.php');
            }
        ?>
    </section>
    
</body>
</html>