<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php
    // 1. ket noi may chu va chon csdl
    $conn = new mysqli("localhost:3306","root","","qlsinhvien");
    // 2. tao truy van du lieu tu bang khoa
    $sql = "select * from khoa where 1=1";
    // 3. thuc thi cau lenh truy van
    $result = $conn-> query($sql);
    // 4. doc tung dong trong tap ket qua va hien thi (phan tbody)
?>

    <header class="container">
        <h1 class="text-center-my-3">danh sach khoa</h1>
    </header>


    <section class="container"> 
        <a href="_3.khoa-add.php" class="btn btn-primary">them moi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma khoa</th>
                    <th>ten khoa</th>
                    <th>chuc nang</th>
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
                            <td> <?php echo $row["MaKH"]; ?></td>
                            <td> <?php echo $row["TenKH"]; ?></td>
                            <td class="text-center">
                                <a href="_3.khoa-edit.php?makh= <?php echo $row["MaKH"] ?>" class = "btn btn-success">Edit</a>
                                <a href="_3.khoa-ds.php?makh= <?php echo $row["MaKH"] ?>" class="btn btn-danger"
                                    onclick="return confirm('co xoa khong')"
                                >Delete</a>
                            </td>
                        </tr>
                <?php 
                    endwhile;
                endif; 
                if($result->num_rows <= 0):
                ?>
                    <tr>
                        <td colspan ="4">chua co data</td>
                    </tr>
                <?php
                    endif;
                ?>
            </tbody>
        </table>
        <a href="_3.khoa-add.php" class="btn btn-primary">them moi</a>
    </section>

    <!-- xoa du lieu -->
<?php
    if(isset($_GET['makh'])){
        $makh = $_GET['makh'];
        // 3. tao truy van xoa
        $sql = "delete from khoa where MaKH = $makh'";    
        try{
            // code...
            echo '<script> alert("loi khi xoa"); </script>';
        }catch(Exception $ex){
            echo "loi khi xoa" . $ex-> getMessage();
            echo '<script> alert("loi khi xoa"); </script>';
        }
    }
?>




    

</body>
</html>