<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        include_once("ketnoi/ketnoi.php");
    ?>
    <header class="container">
        <?php
            include_once('views/header.php');
        ?>

        <section>
            <div class="container">
                <?php
                    if(isset($_GET['view'])){
                        include_once('views/'.$_GET['view'].'.php');
                    }else{
                        include_once('views/Home.php');
                    }
                ?>
            </div>
        </section>
    
    </header>
</body>
</html>