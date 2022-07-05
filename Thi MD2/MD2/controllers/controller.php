<?php
include '././models/model.php';
class Controller
{
    public function index()
    {
        // echo "123";
        $objController = new Model();
        $products = $objController->all();
        // echo '<pre>';
        // print_r($products);
        // echo '</pre>';
        include "./views/index.php";
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $Model = new Model();
            $obj = $Model->add($_REQUEST);

            header('location: index.php?controller=users&action=index');
        }
        include "./views/add.php";
    }
    public function delete()
    {
        $id = $_REQUEST['id'];
        $objController = new Model();
        $objController->delete($id);
        header('location: index.php?controller=users&action=index');
        include "./views/delete.php";
    }

    public function edit(){
            // echo"$id";die();

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $id = $_REQUEST['id'];

            echo '$id';

            die();
            $productModel = new Model();
            $productModel->find($id);
            header('location: index.php?controller=users&action=index');
        }
        include "./views/edit.php";

    }
    public function show()
    {
    }
}
