<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php
    // 1. ket noi may chu va chon csdl
    include_once("ketNoi.php");
    // 2. tao truy van du lieu tu bang khoa
    $sql = "select * from monhoc where 1=1";
    // 3. thuc thi cau lenh truy van
    $result = $conn-> query($sql);
    // 4. doc tung dong trong tap ket qua va hien thi (phan tbody)
?>

    <header class="container">
        <h1 class="text-center-my-3">Danh sách môn học</h1>
    </header>


    <section class="container"> 
        <a href="monhoc-add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Mã môn học</th>
                    <th>Tên môn học</th>
                    <th>Số tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result->num_rows >0):
                    $num =0;
                    while($row = $result->fetch_array()):
                        $num++;
                ?>
                        <tr>
                            <td><?php echo $num; ?></td>
                            <td> <?php echo $row["MaMH"]; ?></td>
                            <td> <?php echo $row["TenMH"]; ?></td>
                            <td class="text-center">
                                <a href="monhoc-edit.php?mamh= <?php echo $row["MaMH"] ?>" class = "btn btn-success">Edit</a>
                                <a href="monhoc-ds.php?mamh= <?php echo $row["MaMH"] ?>" class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn muốn xoá không?')"
                                >Delete</a>
                            </td>
                        </tr>
                <?php 
                    endwhile;
                endif; 
                if($result->num_rows <= 0):
                ?>
                    <tr>
                        <td colspan ="4">Chưa có dữ liệu</td>
                    </tr>
                <?php
                    endif;
                ?>
            </tbody>
        </table>
        <a href="monhoc-add.php" class="btn btn-primary">Thêm mới</a>
    </section>

    <!-- xoa du lieu -->
<?php
    if(isset($_GET['mamh'])){
        $mamh = $_GET['mamh'];
        // 3. tao truy van xoa
        $sql = "delete from khoa where MaMH = $mamh'";    
        try{
            // code...
            echo '<script> alert("Đã xảy ra lỗi khi xoá"); </script>';
        }catch(Exception $ex){
            echo "Đã xảy ra lỗi khi xoá" . $ex-> getMessage();
            echo '<script> alert("Đã xảy ra lỗi khi xoá"); </script>';
        }
    }
?>

</body>
</html>