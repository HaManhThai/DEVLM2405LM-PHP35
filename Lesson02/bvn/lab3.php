<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài 3</title>
</head>
<body>

<?php
        if(isset($_POST["submit"])){
            $so = $_POST["so"];
            $i=0;
            $c =0;
            $c1 =0;
            $soChan = array();
            $soLe = array();
            $tongChan = 0;
            $tongLe = 0;
            while($i<=$so){
                if($i %2==0){
                    $soChan[$c] = $i;
                    $tongChan +=$i;
                    $c++;
                }else{
                    $soLe[$c1] = $i;
                    $tongLe +=$i;
                    $c1++;
                }
                $i++;
            }
        }

        
    ?>

    <table>
        <form action="" method="post">
            <tr>Hiển thị danh sách số lẻ, số chẵn và tổng tương ứng</tr>
            <tr>
                <td><label for="so">Nhập số bất kì: </label></td>
                <td><input type="number" name="so" id="so" value="<?php echo isset($so) ? $so : "" ?>"></td>
                <td><button name="submit" >Xử lý</button></td>
            </tr>
        </form>
    </table>

   

    <div>
        <?php
        //
            echo "Các số chẵn: ";
            for($i =0;$i<count($soChan);$i++){
                if($i == count($soChan) -1){
                    echo $soChan[$i];
                    break;
                }
                echo $soChan[$i] . ", ";
            }
            echo "</br>";
            echo "Các số lẻ: ";
            for($i =0;$i<count($soLe);$i++){
                if($i == count($soLe) -1){
                    echo $soLe[$i];
                    break;
                } 
                echo  $soLe[$i] . ", ";
            }
            echo "</br>Tổng các số chẵn: " .$tongChan . "</br>" . "Tổng các số lẻ: " . $tongLe;


            // hoặc:

            // echo "Các số chẵn: ";
            // foreach($soChan as $key=>$value){
            
            //     echo $value . ", ";
            // }
            // echo "</br>";
            // echo "Các số lẻ: ";
            // foreach($soLe as $key=>$value){
            //     echo $value . ", ";
            // }
            // echo "</br>Tổng các số chẵn: " .$tongChan . "</br>" . "Tổng các số lẻ: " . $tongLe;
            ?>
    </div>
</body>
</html>
