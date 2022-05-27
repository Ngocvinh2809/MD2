<!-- <form action="" method="POST">
    <input type="text" name="nhapso" >
    <input type="submit" value="tìm" name="">
</form> -->
<?php 
//  if ($_SERVER['REQUEST_METHOD']=='POST'){
//     $X=$_REQUEST['nhapso'];
//   if (!empty($_POST['nhapso'])){
//     function kiemtra($X) {
//         if($X%2==0){
//             return true;
//         }else{
//             return false;
//         }
//     }
//     $result = kiemtra($X);
//     if ($result==true){
//         echo "người dùng đã nhập vào số ".$X." là số chẵn" ;
//     }else{
//         echo "người dùng đã nhập vào số ".$X." là số lẽ";
//     }  
//   }else{
//     echo "vui lòng nhập số";
//   }
// }

// $data = ["username" =>"nguyen van A", "password" =>"123456"];
// echo $data["username"]."<br>";
// echo $data["password"];



// {
//     $data = data(
//     "username" : "nguyen van A",
//     "password" : "123456"
//     )
// }

//khai báo lớp

class HCN {
    //khai báo thuộc tính
    public $dai;
    public $rong;
    public function __construct($ts_dai, $ts_rong){
        $this->dai = $ts_dai;
        $this->rong = $ts_rong;
    }
    //khai báo đối tượng
    public function chuvi(){
        return ($this->dai + $this->rong)*2; 
    }
    public function dientich(){
        return $this->dai * $this->rong;
    }
    public function set_rong($ts_rong){
        $this->rong = $ts_rong;
    }
    public function set_dai($ts_dai){
        $this->dai = $ts_dai;
    }
    public function get_dai(){
        return $this->dai;
    }
    public function get_rong(){
        return $this->rong;
    }
};
// khởi tạo đối tượng
$HCN = new HCN(10,11);
$HCN->set_dai(15);
$HCN->set_rong(5);
echo $HCN->get_dai();
echo "<br />";
echo $HCN->get_rong();
echo "<br/>";
// truy cập thuộc tính
    // echo $HCN -> dai ;
    // echo $HCN -> rong ;
// truy cập phương thức
    echo "chu vi là ".$HCN ->chuvi();
    echo "<br />";
    echo "diện tích là ".$HCN ->dientich();
    echo '<pre>';
    print_r($HCN);
    die();
?>