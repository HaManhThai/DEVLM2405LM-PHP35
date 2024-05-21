<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang dịch vụ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


</head>
<body>

 
    <header>
        <?php
            include("header.php");
        ?>

        <nav>
            <?php
                include("nav-main.php");
            ?>
        </nav>
    </header>
    
    <section style="display: flex">
        <!-- nav-left-sec -->
        <?php
                include("nav-left-sec.php");
            ?>
        
        <!-- content -->         
            <div id ="content" class="border border-radius" style="height:300px; width:100%">
                <h3>Đây là trang dịch vụ</h3>
            </div>
    </section>

    <footer>
        <?php
            include("footer.php");
        ?>
    </footer>

  
</body>
</html>