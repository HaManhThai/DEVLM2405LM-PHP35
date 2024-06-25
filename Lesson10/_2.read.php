<h1>doc data tu bang</h1>

<?php
    // 1. ket noi
    $conn = new mysqli("localhost:3306","root","","demoMySQL");
    // 2. tao truy van tu bang
    $sql = "Select *from tbl_user where 1=1";
    $sql2 = "insert into tbl_user values(19,'thaihm','123456','thaihm@gmail.com','ha manh thai yeu',19,NULL,1)";
    // 3. thuc thi cau lenh truy van => tra ve 1 tap ket qua
     $result = $conn-> query($sql);
     echo "<pre>";
    print_r($result);

    // echo "<h2>them data </h2>";
    // $sql_insert = "insert into tbl_pronvince(pro_name,statuss) values("1","tp HN", 1)";
    // if($conn->query($sql_insert)){
    //     echo "thanh cong";
    // }else{
    //     echo "loi them moi: $conn->connect_error";
    // }

    // doc tung dong trong tap ket qua
    // while($row = $result->fetch_array()){
    //     echo $row['fullname'];
    // }
?>