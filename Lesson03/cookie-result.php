<h1>giá trị cookie</h1>
<?php
    if(isset($_COOKIE["email"])){
        echo $_COOKIE["email"];
    }

    if(isset($_COOKIE["pass"])){
        echo $_COOKIE["pass"];
    }

    echo "<hr>";
    print_r($_COOKIE); // print_r in đúng định dạng 
?>