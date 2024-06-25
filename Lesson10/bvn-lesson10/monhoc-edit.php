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
    if(isset($_POST["btnSave"])){
        // 1. ket noi
        include_once("ketNoi.php");
        // khi ng dung nhan nut ghi lai
        if (isset($_POST["btnSave"])){
            // lay du lieu tren form
            $MaMH = $_REQUEST["MaMH"];
            $TenMH = $_REQUEST["TenMH"]; 
            // 2. tao truy van sua
            $sql = "update monhoc set TenMH='$TenMH' where MaMH='$MaMH'";
        }
    
    }else if(isset($_REQUEST['MaMH'])) // co ton tai mamh tren url
    // doc du lieu can sua tu bang môn học theo mamh
    $mamh = $_REQUEST["MaMH"];
    // 1. KET NOI
    include_once("ketNoi.php");
    // 2. tao truy van doc du lieu tu bang khoa theo ma khoa
    $sql = "select * from monhoc where MaMH = '$mamh'";
    // 3. thuc thi cau lenh truy van
    $result = $conn->query($sql);
    if($result->num_rows >0){
        $row = $result->fetch_array();
        $MaMH = $_REQUEST["MaMH"];
        $TenMH = $_REQUEST["TenMH"]; 
    }else{
        $err = "Không tìm thấy thông tin môn học cần sửa";
    }
?>

    <header class="container">
        <h1 class="text-center-my-3">Danh sách môn học</h1>
    </header>


    <section class="container"> 
        <form action="" method="post" class="p-5">
            <div class="input-group mb-3">
                <span class="input-group text" id="MaMH">Mã môn học</span>
                <input type="text" class="form-control" placeholder="MaMH" name="MaMH" arial-label="MaMH" arial-describedby="MaMH"> 
            </div>
            <div class="input-group mb-3">
                <span class="input-group text" id="TeMH">Tên môn học</span>
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