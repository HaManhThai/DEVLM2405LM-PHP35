<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
</head>
<body>
    <h2>Tìm kiếm sản phẩm</h2>
    <table>
        <form action="ketquatimkiem.php" method="post">
            <tr>
                <td><label for="">Tên sản phẩm</label></td>
                <td><input type="text" name="tensanpham"></td>
            </tr>
            <tr>
                <td><label for="">Loại sản phẩm</label></td>
                <td>
                    <select name="loaisanpham" id="">
                        <option value="Dell">Dell</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Asus">Asus</option>
                        <option value="Hp">Hp</option>
                        <option value="Acer">Acer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Giá sản phẩm</label></td>
                <td><input type="text" name="giasanpham"></td>
            </tr>
            <tr>
                <td></td>
                <td><button value="Tìm Kiếm">Tìm Kiếm</button></td>
            </tr>
        </form>
    </table>
</body>
</html>