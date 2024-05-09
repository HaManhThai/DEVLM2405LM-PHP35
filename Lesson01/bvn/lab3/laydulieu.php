<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Đăng ký thành viên</h2>
    <form action="" method="">
        <table>
            <tr>
                <td><label for=""><?php echo "Tên đăng nhập: "; ?></label></td>
                <td><?php echo $_POST["tendangnhap"] ?></td>
            </tr>
            <tr>
                <td><label for=""><?php echo "Mật khẩu: "; ?></label></td>
                <td><?php echo $_POST["matkhau"] ?></td>
            </tr>
            <tr>
                <td><label for=""><?php echo "Họ và Tên: "; ?></label></td>
                <td><?php echo $_POST["hovaten"] ?></td>
            </tr>
            <tr>
                <td><label for=""><?php echo "Email: "; ?></label></td>
                <td><?php echo $_POST["email"] ?></td>
            </tr>
            <tr>
                <td><label for=""><?php echo "Giới tính: "; ?></label></td>
                <td><?php echo $_POST["gioitinh"] ?></td>
            </tr>

            <tr>
                <td><label for=""><?php echo "Sở thích: "; ?></label></td>
                <td>
                    <?php 
                        $i=0;
                        foreach($_POST["sothich"] as $key => $value){
                            $i++;
                            if($i==1) echo $value;
                            else echo ", ". $value;
                        }
                    ?>
                </td>
            </tr>


            <tr>
                <td><label for=""><?php echo "Tỉnh thành: "; ?></label></td>
                <td><?php echo $_POST["chontinh"] ?></td>
            </tr>

            <tr>
                <td><label for=""><?php echo "Mô tả: "; ?></label></td>
                <td><?php echo $_POST["mota"] ?></td>
            </tr>

        </table>
    </form>
</body>
</html>