<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Mặt hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Chỉnh Sửa Mặt hàng</h3>
                    </div>
                    <div class="card-body" style="background-color: #64ff0017">
                        <form action="index.php?controller=users&action=edit" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên Hàng </label>
                                <input class="form-control" type="text" value="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Loại Hàng </label>
                                <select name="loaihang" id="">
                                    <option value="Androi">Androi</option>
                                    <option value="IOS">IOS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Giá </label>
                                <input class="form-control" type="number" value="" name="gia">
                            </div>
                            <div class="form-group">
                                <label>Số Lượng </label>
                                <input class="form-control" type="number" value="" name="soluong">
                            </div>
                            <div class="form-group">
                                <label>Mô Tả </label>
                                <textarea style="width: 100%;"  name="mota" value=""cols="148" rows="6"></textarea>
                            </div>
                            <button name="btn" class="btn btn-success">Sửa Mặt Hàng</button>
                            <a href="index.php?controller=users&action=index"><button name="btn" class="btn btn-success">Thoát </button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>