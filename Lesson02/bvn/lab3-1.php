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
            $soChan = $soLe = "";
            $tongChan = $tongLe = 0;
            while($i<=$so){
                if($i %2==0){
                    $soChan .= $i.", ";
                    $tongChan +=$i;
                
                }else{
                    $soLe .= $i .", ";
                    $tongLe +=$i;
                  
                }
                $i++;
            }
        }
        echo "<p> Các số chẵn: ".$soChan;
        echo "<br> <p> Các số lẻ: ".$soLe;
        echo "<br> <p> Tổng các số chẵn: ".$tongChan;
        echo "<br> <p> Tổng các số lẻ: ".$tongLe;
    ?>

    <?php
       
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
    
           
         

   
    </div>
</body>
</html>
