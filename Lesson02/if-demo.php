<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 1</title>
</head>
<body>

    <?php
        // giai ptr bac nhất
        if(isset($_POST["btnThucHien"])){ // khi ng dùng thực hiện
            // lấy giá trị từ các điều khiển trên form
            $a = $_POST["heSoA"];
            $b = $_POST["heSoB"];
            echo "<h2> $a.X + $b  = 0 </h2>";

            // giai ptr:
            if($a == 0){
                if($b ==0){
                    $kq = "ptr vô số no";
                }else{
                    $kq = "ptr vo no";
                }
            }else{
                $x = -$b / $a;
                $kq = "ptr có 1 no là x = ". $x;
            }
        }
    ?>

        <h1>Giải phtr bậc nhất: a.X + b=0</h1>
        <form action="" method="post">
            <div>
                <label for="heSoA">Hệ số a</label>
                <input type="text" name="heSoA" id="heSoA" value="<?php echo isset($a) ? $a:''  // toán tử 3 ngôi?>"> 
            </div>

            <div>
                <label for="heSoB">Hệ số b</label>
                <input type="text" name="heSoB" id="heSoB" value="<?php echo isset($b) ? $b:'' ?>">
            </div>

            <button name="btnThucHien">Thực hiện</button>
            <!-- <input type="text" readonly name="ketQua" value=""> -->
            <div><?php echo $kq; ?></div>
        </form>
</body>
</html>