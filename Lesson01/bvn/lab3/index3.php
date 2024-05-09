<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Đăng ký thành viên</h2>
    <form action="laydulieu.php" method="post">
        <table>
            <tr>
                <td><label for="">Tên đăng nhập</label></td>
                <td><input type="text" name="tendangnhap" placeholder="Tên đăng nhập"></td>
            </tr>
            <tr>
                <td><label for="">Mật khẩu</label></td>
                <td><input type="password" name="matkhau" placeholder="Mật khẩu"></td>
            </tr>
            <tr>
                <td><label for="">Họ và Tên</label></td>
                <td><input type="text" name="hovaten" placeholder="Họ Tên"></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="email" name="email" placeholder="Thư điện tử"></td>
            </tr>
            <tr>
                <td><label for="">Giới tính</label></td>
                <td>
                    <input type="radio" name="gioitinh" value="Nam"> Nam
                    <input type="radio" name="gioitinh" value="Nữ"> Nữ
                </td>
            </tr>

            <tr>
                <td><label for="">Sở thích</label></td>
                <td>
                    <input type="checkbox" name="sothich[0]" value="Đá bóng">Đá bóng
                    <input type="checkbox" name="sothich[1]" value="Cầu lông">Cầu lông
                    <input type="checkbox" name="sothich[2]" value="Du lịch">Du lịch
                    <input type="checkbox" name="sothich[3]" value="Nghe nhạc">Nghe nhạc
                    <input type="checkbox" name="sothich[4]" value="Bóng bàn">Bóng bàn
                </td>
            </tr>


            <tr>
                <td><label for="">Chọn tỉnh</label></td>
                <td>
                    <select name="chontinh" id="">
                        <option value="--Chọn Tỉnh--">--Chọn Tỉnh</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Nghệ An">Nghệ An</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="">Mô tả</label></td>
                <td><input type="textarea" name="mota" placeholder="Mô tả thông tin">


                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Đồng ý">
                    <input type="reset" value="Làm lại">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>