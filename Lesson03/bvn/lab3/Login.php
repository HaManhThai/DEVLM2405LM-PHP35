<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


</head>
<body>

    <?php
        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $pass = $_POST["pass"];
            if(isset($_POST["Remember"])){
                setcookie("name", $name);
                setcookie("pass", $pass);
            }
        }

        $name = "";
        $pass = "";

        $check = false;
        if(isset($_COOKIE["name"]) && isset($_COOKIE["pass"])){
            $name=$_COOKIE["name"];
            $pass = $_COOKIE["pass"];
            $check = true;
        }
    ?>

  
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
                <h3>Đây là trang Login</h3>
                <form action="" method="post">
                    <label for="name">User name</label>
                    <input type="text" name="name" id="name" value="<?php echo $name ?>">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" value="<?php echo $pass ?>">
                    
                    <input type="checkbox" name="Remember" id="Remember" value="Remember" <?php echo ($check) ? "check": "" ?>> 
                    <label for="Remember">Remember</label>

                    <button name="submit">Login</button>
                </form>
            </div>
      
    </section>

    <footer>
        <?php
            include("footer.php");
        ?>
    </footer>

  
</body>
</html>