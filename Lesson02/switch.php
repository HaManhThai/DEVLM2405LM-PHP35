<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc switch case</title>
</head>
<body>

    <?php
    if(isset($_POST["btnThucHien"])){
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];
        $soNgay = 0;
        switch ($thang){
            case 1:
            case 3:
            case 5 :
            case 7:        
            case 8:
            case 10:
            case 12:
                $soNgay = 31; break;
            case 4:
            case 6:
            case 9:
            case 11:
                $soNgay = 30; break;
            case 2:
                if($nam %4 == 0 && $nam %400 !=0){
                    $soNgay  =29;

                }else{
                    $soNgay = 28;
                }

                default:
                $soNgay = "Bạn nhập sai tháng";
        
        $soNgay = "Tháng " . $thang . " năm ". $nam ."có ".$soNgay ;
            }
        }
    
    
       
       
    ?>

    <form action="" methof="post">
        <h2>Tính số ngày trong tháng năm</h2>
        <div>
                <label for="thang">Tháng</label>
                <input type="number" name="thang" id="nam" value="<?php echo isset($thang) ? $thang:''  // toán tử 3 ngôi?>"> 
            </div>

            <div>
                <label for="nam">Năm</label>
                <input type="number" name="nam" id="nam" value="<?php echo isset($nam) ? $nam:'' ?>">
            </div>

            <button name="btnThucHien">Thực hiện</button>
            <!-- <input type="text" readonly name="ketQua" value=""> -->
            <div><?php echo isset($soNgay) ?$SoNgay :""; ?></div>
    </form>
</body>
</html>