<!-- phan 1 : xu ly = php (xu li lon)
    phan 2: html ket hop vs php (xu li nho)
  -->
 <?php
    // da ket noi
    $sql = "select * from sinhvien where 1=1"; // where de no luon dung

    $arr = [];
    if(isset($_GET["MaKH"])){
    }







    if(isset($_GET["makh"])){
        $maKh = $_GET["makh"];
        $sql .= " and MaKh ".$maKh;
    }

    $result = $conn->prepare($sql);
    $result-> execute();

    $sqlKhoa = "select * from KHOA";
    $resKhoa = $conn->prepare($sqlKhoa);
    $resKhoa -> execute();
?>


<div class="row">
    <h2>ql thong tin sinh vien</h2>
    
<!-- tao form dang select option de chon khoa, tu do show ra sinh vien thuoc khoa do -->
    <form action="index.php?view=sinhvien-ds" method="get">
        <input name='view' value="sinhvien-ds" type="hidden" >
        <div>
            <label for="">chon Khoa</label>
            <select name="khoa" id="">
                <option value="">---chon khoa---</option>
                <?php
                    foreach($resKhoa as $rowKhoa){                   
                    ?>
                        <option value="
                            <?php $rowKhoa['MaKH']; ?>
                             <?php $rowKhoa['TenKH']; ?>
                        "></option>
                    <?php
                }
                ?>
            </select>
            <button>Tim kiem</button>
        </div>
    </form>




    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ma sv</th>
                <th scope="col">ho sv</th>
                <th scope="col">ten sv</th>
                <th scope="col">phai</th>
                <th scope="col">ngay sinh</th>
                <th scope="col">noi sinh</th>
                <th scope="col">hoc bong</th>
                <th scope="col">diem trung binh</th>
                <th scope="col">chuc nang</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $stt =0;
                foreach($result as $row){
                    $stt++;
                
                ?>
                    <tr>
                        <td><?php echo $stt; ?></td>

                        <td><?php echo $row['MaSV']; ?></td>
                        <td><?php echo $row['HoSV']; ?></td>
                        <td><?php echo $row['TenSV']; ?></td>
                        <td><?php echo $row['Phai'] =false? "nam":"nu"; ?></td>
                        <td><?php echo $row['NgaySinh']; ?></td>
                        <td><?php echo $row['NoiSinh']; ?></td>
                        <td><?php echo $row['HocBong']; ?></td>
                        <td><?php echo $row['DiemTrungBinh']; ?></td>
                        
                        <td>
                            <a href="index.php?view=sinhvien-addOredit$action=edit$masv=<?php echo $row['MaSV']; ?>" class="btn btn-success">
                                Edit
                            </a>
                        </td>
                    </tr>
                    <?php
                
                }
            ?>
        </tbody>
    </table>
</div>



