<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <?php
        
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            if($a ==0){
                if($b==0){
                    if($c== 0){
                        $kq = "<p> Phương trình có vô số nghiệm";
                    }else{
                        $kq = "<p> Phương trình vô nghiệm";
                    }
                }else{
                    $kq = -$c/$b;
                    
                }
            }else{
                $denta = $b*$b - 4*$a*$c;
                if($denta >0){
                    $x1 = (-$b + sqrt($denta)) /(2*$a);
                    $x2 = (-$b - sqrt($denta)) /(2*$a);
                    $kq = " <p> Phương trình có 2 nghiệm phân biệt lần lượt là " .$x1. " va ".$x2;
                }elseif($denta ==0){
                    $kq = "<p> Phương trình có nghiệm duy nhất x = " . (-$b/(2*$a)); 
                }else{
                    $kq = "<p> Phương trình vô nghiệm";
                }
            }
        }
    ?>
  
    <table>
        <form action="" method="post">
            
        <tr>
            <td></td>
            <td>Giải phương trình bậc 2</td>
        </tr>

        <tr>
            <td></td>
            <td>ax<sup>2</sup> + bx + c = 0</td>
        </tr>

        <tr>
            <td><label for="a" >số a</label></td>
            <td><input type="number" name="a" id="a" value="<?php echo isset($a) ?$a : "" ?>"></td>
        </tr>

        <tr>
            <td><label for="b">số b</label></td>
            <td><input type="number" name="b" id="b" value="<?php echo isset($b) ?$b : "" ?>"></td>
        </tr>

        <tr>
            <td><label for="c">số c</label></td>
            <td><input type="number" name="c" id="c" value="<?php echo isset($c) ?$c : "" ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><button name="submit">Giải phương trình</button></td>
        </tr>
        
        </form>
    </table>

    <div><?php echo $kq ?></div>
</body>
</html>