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
    if(isset($_POST["btnSave"])){
        // 1. ket noi
        include_once("_0.ketnoi.php");
        // khi ng dung nhan nut ghi lai
        if (isset($_POST["btnSave"])){
            // lay du lieu tren form
            $MaKH = $_REQUEST["MaKH"];
            $TenKH = $_REQUEST["TenKH"]; 
            // 2. tao truy van sua
            $sql = "update khoa set TenKH='$TenKH' where MaKH=""
        }
    
    }else if(isset($_REQUEST['makh'])) // co ton tai makh tren url
    // doc du lieu can sua tu bang khoa theo makh
    $makh = $_REQUEST["MaKH"];
    // 1. KET NOI
    include_once("_0.ketnoi.php");
    // 2. tao truy van doc du lieu tu bang khoa theo ma khoa
    $sql = "select * from khoa where MaKH = $makh";
    // 3. thuc thi cau lenh truy van
    $result = $conn->query($sql);
    if($result->num_rows >0){
        $row = $result->fetch_array();
        $MaKH = $_REQUEST["MaKH"];
        $TenKH = $_REQUEST["TenKH"]; 
    }else{
        $err = "kh tim thay thong tin khoa can sua";
    }
?>

    <header class="container">
        <h1 class="text-center-my-3">danh sach khoa</h1>
    </header>


    <section class="container"> 
        <form action="" method="post" class="p-5">
            <div class="input-group mb-3">
                <span class="input-group text" id="MaKH"> Ma Khoa</span>
                <input type="text" class="form-control" placeholder="MaKH" name="MaKH" arial-label="MaKH" arial-describedby="MaKH" readonly> 
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