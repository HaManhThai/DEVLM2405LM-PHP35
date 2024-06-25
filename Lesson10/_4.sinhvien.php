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
    $sql = "select * from sinhvien where 1=1";
    // 3. thuc thi cau lenh truy van
    $result = $conn-> query($sql);
    // 4. doc tung dong trong tap ket qua va hien thi (phan tbody)
?>

    <header class="container">
        <h1 class="text-center-my-3">danh sach sinh vien</h1>
    </header>



<section class="container"> 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ma sv</th>
                    <th>ho sv</th>
                    <th>ten sv</th>
                    <th>phai</th>
                  
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
                            <td> <?php echo $row["MaSV"]; ?></td>
                            <td> <?php echo $row["HoSV"]." ".$row["TenSV"]; ?></td>
                            <td class="text-center">
                                <a href="" class = "btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
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
    </section>

        

</body>
</html>