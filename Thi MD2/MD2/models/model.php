<?php
include "db.php";

class Model
{


    public function all()
    {
        // echo "1234";
        global $conn;
        $sql = "SELECT * FROM `mathang`";
        $stmt = $conn->query($sql);
        //thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function add($data)
    {
        global $conn;
        $name = $data['name'];
        $loaihang = $data['loaihang'];
        $gia = $data['gia'];
        $soluong = $data['soluong'];
        $mota = $data['mota'];
        // echo '<pre>';
        // print_r($name);
        $sql = "INSERT INTO `mathang`( `name`, `loaihang`, `gia`, `soluong`, `mota`) VALUES ('$name', '$loaihang','$gia', '$soluong ','$mota' )";
        $conn->query($sql);
    
    }
    public function delete($id)
    {
        global $conn;
        //cau query
        $sql = "DELETE FROM mathang WHERE `mathang`.`id` = $id";
        //thuc hien truy van
        $conn->exec($sql);
    }

   
    public function find($id)
    {
        global $conn;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            
            $name = $_REQUEST['name'];
            $loaihang = $_REQUEST['loaihang'];
            $gia = $_REQUEST['gia'];
            $soluong = $_REQUEST['soluong'];
            $mota = $_REQUEST['mota'];

            $sql = "UPDATE `mathang` SET 
           `name`='$name',`loaihang`='$loaihang',`gia`='$gia',
            `soluong`='$soluong',`mota`='$mota' WHERE `id` = '$id'";
            
            $stmt = $conn->prepare($sql);
           print_r($stmt);die();
            $stmt->execute();
         
        }
    }
    public function show()
    {
    }
}
