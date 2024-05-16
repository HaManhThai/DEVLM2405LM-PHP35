<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php
            include("views/header.php");
        ?>
    </header>
    <nav>
    <?php
            include("views/navBar.php");
        ?>
    </nav>

    <section id="sideBar">
    <?php
            include("views/asideBar.php");
        ?>
    </section>
    <section id="main">
        <div class="container">
            <div class="row">
            <div class="col-md-2">
                <!-- navLeft -->
                <?php
                    include("views/navLeft.php");
                ?>
            </div>
            <div class="col-md-10">
                <!-- content -->
                <?php
                    include("views/content.php");
                ?>
            </div>
            </div>
        </div>
    </section>

    <footer>
        <?php
            include("views/footer.php");
        ?>
    </footer>
</body>
</html>