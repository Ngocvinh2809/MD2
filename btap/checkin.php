<?php  
    // define('SDT','123456');
    // echo SDT;


    
    $money = true;

    // if ($age >= 18 || $money == true) {
    //     echo "bạn được uống bia";
    // }

    // if (!($age <18 )) {
    //     echo " bạn phải uống nước ngọt";
    // }
    
    $quan_open = true;
    $cho_no = true;
    // if ($quan_open && ($money ==true || $cho_no)) {
    //     echo "bạn được nhậu";
    // }else {
    //     echo "bạn phải về nhà";
    // }

    $day = 7 ;
    // if ($day >= 2 && $day <=6) {
    //     echo "đi làm";
    // }else if ($day == 7) {
    //     echo "sinh hoạt clb";
    // }else{
    //     echo "relax";
    // }

    $month = 1 ;
    // switch ($month) {
    //     case 1 ;
    //     echo "31 ngày";
    //     break ;
    //     case 2 ;
    //     echo "28 ngày";
    //     default:
    //     echo "30 ngày";
    // }

    // switch($day) {
    //     case 2 :
    //     case 3 :
    //     case 4 :
    //     case 5 :
    //     case 6 :
    //         echo "đi làm";
    //         break ;
    //     case 7 :
    //         echo "sinh hoat clb";
    //         break;
    //     default :
    //         echo "relax";
    // }

    $age = 17 ;
    // $age = $age >= 18 ? "uống bia" : "uống rượu" ;
    // echo $age;

    // switch(true) {
    //     case $day >=2 && $day <=6:
    //         echo "đi làm";
    //         break ;
    //     case $day == 7 :
    //         echo "sinh hoat clb";
    //         break ;
    //     default :
    //         echo "relax";
    // }

    // for ($i=0 ; $i<=5; $i++) {
    //     echo $i ;
    //     echo "<br />";
    // }

    $a = 5;
    // for ($i=1 ; $i<=10 ; $i++) {
    //     echo "$a X $i = ".($a *$i); 
    //     echo "<br />";
    // }

    // for ($i=100 ; $i>=1; $i--) {
    //     if ($i%2 != 0) {
    //         echo $i ;
    //         echo "<br />";
    //     }
    // }

    $tong = 0;
    // for ($i=1 ; $i<=10 ; $i++) {
    //     $tong+=$i ;
    // }
    // echo $tong ;

    $b = 10;
    // while ($b>=0){
    //     echo $b."<br />";;
    //     $b--;
    // }

    $c = 0;
    // do {
    //     echo $c."<br>";
    //     $c++;
    // }
    // while ($c<=5);


    $d = 10;
    // do {
    //     echo $d."<br />";
    //     $d--;
    // }
    // while ($d>=5);
    
    // for ($i=1 ; $i<=10 ; $i++) {
    //     if ($i== 5) {
    //         break;
    //     } echo $i."<br>";
    // }

    // for ($i=1 ; $i<=5 ; $i++) {
    //     if ($i== 3) {
    //         continue;
    //     }
    //     echo $i."<br />";
    // }

    // for ($i=1 ; $i<=10 ; $i++) {
    //     if ($i%2!=0) {
    //         continue;
    //     }
    //     echo $i."<br />";
    // }
   
?>

<html>
    <head>
        <title></title>
    </head>

    <body>
        
        <table border= "1" cellspacing> 
        <?php
        for ($i=0 ; $i<8 ; $i++) {
          echo "<tr>";
            for ($j=0 ; $j<3 ; $j++) {
            echo "<td>$j</td>";
            }
          echo "</tr>";
        }
        ?>
        </table>
       
    </body>
</html>
