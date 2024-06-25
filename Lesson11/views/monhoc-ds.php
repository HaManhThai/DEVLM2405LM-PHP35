<?php
    // da ket noi
    $sql = "select * from monhoc where 1=1"; // where de no luon dung
    $result = $conn->prepare($sql);
    $result-> execute();
?>


<div class="row">
    <h2>ql thong tin mon hoc</h2>
    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ma mon</th>
                <th scope="col">ten mon</th>
                <th scope="col">so tiet</th>
                <th scope="col">chuc nang</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $stt1 =0;
                foreach($result as $row){
                    $stt++;
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>

                    <td><?php echo $row['MaMH']; ?></td>
                    <td><?php echo $row['TenMH']; ?></td>
                    <td><?php echo $row['Sotiet']; ?></td>

                    <td>
                        <a href="index.php?view=monhoc-addOredit$action=edit$mamh=<?php echo $row['MaMH']; ?>" class="btn btn-success">
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



