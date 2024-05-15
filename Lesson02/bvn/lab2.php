<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài 2</title>
</head>
<body>

    <?php
        if(isset($_POST["submit"])){
            $m = $_POST["thang"];
            switch($m){
                case 1:
                    $m1 = "Tháng một";
                    break;
                
                case 2:
                    $m1 = "Tháng hai";
                    break;

                case 3:
                    $m1 = "Tháng ba";
                    break;

                case 4:
                    $m1 = "Tháng tư";
                    break;

                case 5:
                    $m1 = "Tháng năm";
                    break;

                case 6:
                    $m1 = "Tháng sáu";
                    break;

                case 7:
                    $m1 = "Tháng bảy";
                    break;

                case 8:
                    $m1 = "Tháng tám";
                break;

                case 9:
                    $m1 = "Tháng chín";
                    break;

                case 10:
                    $m1 = "Tháng mười";
                    break;

                case 11:
                    $m1 = "Tháng mười một";
                    break;

                case 12:
                    $m1 = "Tháng mười hai";
                    break;
                
            }
        }
    ?>

    <table>
        <form action="" method="post">
            <tr>Nhập vào số tháng chuyển thành chữ</tr>
            <tr>
                <td><label for="thang" >Nhập số tháng: </label> </td>
                <td><input type="number" name="thang" id="thang" value="<?php echo isset($m) ?$m: "" ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="submit">Tìm tháng</button></td>
            </tr>
        </form>
    </table>
    <div><?php echo $m1 ?></div>
</body>
</html>