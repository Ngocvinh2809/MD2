<?php
namespace thongtin;
class Emloyees{
    public string $ho ;
    public string $ten ;
    private int $ngaysinh ;
    public string $diachi;
    private string $vitri;
    public function __construct($ho,$ten,$ngaysinh,$diachi,$vitri){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->diachi = $diachi;
        $this->vitri = $vitri;

    }
    public function setFirstName($ho){
        $this->ho = $ho;
    }
    public function setLastName($ten){
        $this->ten = $ten;
    }public function setBirthDay($ngaysinh){
        $this->ngaysinh = $ngaysinh;
    }public function setAdress($diachi){
        $this->diachi = $diachi;
    }public function setLocal($vitri){
        $this->vitri = $vitri;
    }
    public function getInfo(){
        return "Họ và tên : ".$this->ho.$this->ten. "<br>" .$this->ngaysinh. "<br>" . $this->diachi . "<br>" .$this->vitri;
    }
}

