<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them moi khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #ccc;">

<?php
    // $err ="";
    if(isset($_POST['btnSave'])){
        // 1. ket noi may chu va chon csdl
        $conn = new mysqli("localhost:3306","root","","qlsinhvien");
        // 2. lay du lieu tren form
        $makh = $_POST['MaKH'];
        $tenkh = $_POST['TenKH'];
        // 3. tao truy van them
        $sql = "insert into khoa(MaKH,TenKH) values('$makh','$tenkh')";
        // die($sql);
        // 4. thuc thi truy van
        // if($conn->query($sql)){
        //     header("Location:_3.khoa-add.php");
        // }else{
        //     $err = "loi them moi". $conn->connect_err;
        // }
        try{ // 
            $conn->query($sql);
            header("Location:_3.khoa-ds.php");
        } catch(Exception $ex){
            $err = "loi them moi". $ex->getMessage();
        }
    }
    
?>

    <header class="container">
        <h1 class="text-center-my-3">danh sach khoa</h1>
    </header>


    <section class="container"> 
        <form action="" method="post" class="p-5">
            <div class="input-group mb-3">
                <span class="input-group text" id="MaKH"> Ma Khoa</span>
                <input type="text" class="form-control" placeholder="MaKH" name="MaKH" arial-label="MaKH" arial-describedby="MaKH">
            </div>
            <div class="input-group mb-3">
                <span class="input-group text" id="TenKH"> Ten Khoa</span>
                <input type="text" class="form-control" placeholder="TenKH" name="TenKH" arial-label="TenKH" arial-describedby="TenKH">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-primary px-2 m-2" name= "btnSave">Ghi lai</button>
                <a href="_3.khoa-ds.php" class="btn btn-primary px-2 m-2">Quay lai</a>
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