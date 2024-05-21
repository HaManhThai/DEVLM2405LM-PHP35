<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <?php
                include("content.php");
            ?>
      
    </section>

    <footer>
        <?php
            include("footer.php");
        ?>
    </footer>

  
</body>
</html>