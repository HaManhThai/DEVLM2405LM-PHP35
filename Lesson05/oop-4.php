<?php
    // 1 cach truy xuat du lieu


    // tham so la doi tuong mang
    Class PhepToan{
        
        // method tinh tong:
        function tinhTong($arrParam){
            if(is_array($arrParam)){ // ham is_array()
                $tong =0;
                foreach($arrParam as $key => $value){
                    $tong += $value;
                }
                echo "<h2> Tong: " . $tong;
            }else{
                echo "<h2> kh phai mang";
            } 
        }
    }

    $pt = new PhepToan();
    $arr = [1,2,3,4,5];
    $pt->tinhTong($arr);
?>