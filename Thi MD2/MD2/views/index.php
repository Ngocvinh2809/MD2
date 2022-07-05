<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11">
                <form action="" method="post">
                    <table class="table table-bordered" border="1">
                        <h1 class="text-center">Danh Sách Mặt Hàng</h1>
                        <div>
                            <form action="" class="form-inline" method="post" ">
                                <input style=" width:200px" class="form-control mr-sm-1" name="txtsearch" type="search" placeholder="nhập tên hàng">
                                <input type="submit" value="Tìm Kiếm" name="search">
                            </form>
                            <a href="index.php?controller=users&action=add">
                                <!-- <button name="sbm" class="btn btn-primary my-sm-0" type="submit"> -->
                                Thêm Mặt Hàng
                                <!-- </button> -->
                            </a>
                        </div><br>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Hàng</th>
                                <th>Loại hàng</th>
                                <th>Hoạt Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $key => $product) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo $product->name ?></td>
                                    <td><?php echo $product->loaihang ?></td>
                                    <td>
                                        <a href="index.php?controller=users&action=delete&id=<?php
                                                                                                echo $product->id; ?>" class="btn btn-danger btn-sm shadow ">Xóa</a>
                                        <a href="index.php?controller=users&action=edit&id=<?php
                                                                                            echo $product->id; ?>" class="btn btn-primary btn-sm shadow ">Chỉnh Sửa</a>
                                        <a href="index.php?controller=users&action=show&id=<?php
                                                                                                echo $product->id; ?>" class="btn btn-danger btn-sm shadow ">Xem</a>
                                    </td>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

</body>

</html>