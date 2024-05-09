<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
</head>
<body>
    <h2>Kết quả tìm kiếm</h2>
    <table>
        <form action="" method="">
            <tr>
                <td><label for=""><?php echo "Tên sản phẩm" ?></label></td>
                <td><?php echo $_POST["tensanpham"] ?></td>
            </tr>
            <tr>
                <td><label for=""><?php echo "Loại sản phẩm" ?></label></td>
                <td><?php echo $_POST["loaisanpham"] ?></td>
            </tr>
            <tr>
                <td><label for=""><?php echo "Giá sản phẩm" ?></label></td>
                <td><?php echo $_POST["giasanpham"] ?></td>
            </tr>
        </form>
    </table>
</body>
</html>