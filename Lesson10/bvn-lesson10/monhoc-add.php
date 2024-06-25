<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #ccc;">

<?php
   
    if(isset($_POST['btnSave'])){
        // 1. ket noi may chu va chon csdl
        include_once("ketNoi.php");
        // 2. lay du lieu tren form
        $mamh = $_POST['MaMH'];
        $tenmh = $_POST['TenMH'];
        // 3. tao truy van them
        $sql = "insert into monhoc(MaMH,TenMH) values('$mamh','$tenmh')";
        
        try{ // 
            $conn->query($sql);
            header("Location:monhoc-ds.php");
        } catch(Exception $ex){
            $err = "Lỗi khi thêm mới". $ex->getMessage();
        }
    }
    
?>

    <header class="container">
        <h1 class="text-center-my-3">Danh sách môn học</h1>
    </header>


    <section class="container"> 
        <form action="" method="post" class="p-5">
            <div class="input-group mb-3">
                <span class="input-group text" id="MaKH">Mã môn học</span>
                <input type="text" class="form-control" placeholder="MaMH" name="MaMH" arial-label="MaMH" arial-describedby="MaMH">
            </div>
            <div class="input-group mb-3">
                <span class="input-group text" id="TenMH"> Tên môn học</span>
                <input type="text" class="form-control" placeholder="TenMH" name="TenMH" arial-label="TenMH" arial-describedby="TenMH">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-primary px-2 m-2" name= "btnSave">Ghi lại</button>
                <a href="monhoc-ds.php" class="btn btn-primary px-2 m-2">Quay lại</a>
            </div>

            <?php
                if(isset($err)):

                
            ?>
                <div class="alert alert-danger">
                    <?php
                        echo $err;
                    ?>
                </div>
            <?php
                endif;
            ?>

        </form>
    </section>

</body>
</html>