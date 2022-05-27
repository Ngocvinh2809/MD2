<?php

  
    
    // $name = "vinh";
    // $tuoi = 22;
    // $diem = 8.2;
    // $b =true;
    // $c =null;
    // $array = ["name", "tuoi", "diem", "mon", "fb"];
    // $arrays =[1,2,3,4,5,6,7,8,9];

    // echo $name; 
    // echo "<br>";
    // echo $tuoi;
    // echo "<br>";
    // echo $diem;
    // echo '<pre>';
    // print_r( $array );
    // echo '</pre>'; 

    // var_dump( $array );
    // $a = 5;
    // function tinh_tong(){
    //     global $a;
    //     $b = 6;
    //     echo $a + $b;
    // }
    // tinh_tong();
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        echo '<pre>';
        print_r( $_REQUEST );
        echo '</pre>'; 
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        echo "xin chao".$username. '<br>'."mat khau cua ban la".$password;
    }
 


?>
<form action="" method="post">
    Ten dang nhap :
    <input type="text" name="username" value="" >
    <br>
    Mat khau :
    <input type="password" name="password" value="" id="">
    <br>
    <button type="submit">Login</button>
</form>