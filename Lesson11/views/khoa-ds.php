<?php
    // da ket noi
    $sql = "select * from khoa where 1=1"; // where de no luon dung
    $result = $conn->prepare($sql);
    $result-> execute();
?>


<div class="row">
    <h2>ql thong tin khoa</h2>
    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ma khoa</th>
                <th scope="col">ten khoa</th>
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
                    <td><?php echo $row['MaKH']; ?></td>
                    <td><?php echo $row['TenKH']; ?></td>
                    <td>
                        <a href="index.php?view=khoa-addOredit$action=edit$makh=<?php echo $row['MaKH']; ?>" class="btn btn-success">
                            Edit
                        </a>
                    </td>
                    <?php
                }
            ?>
            </tr>
        </tbody>
    </table>
</div>