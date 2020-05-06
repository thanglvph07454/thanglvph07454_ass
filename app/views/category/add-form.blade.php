<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="./">Quản lý sản phẩm</a>
            <a class="nav-link" href="./category">Quản lý danh mục</a>
        </nav>
        <h3>Tạo mới sản phẩm</h3>
        <form action="./save-add-category" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="cate_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Show Menu</label>
                        <input type="number" name="show_menu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Desc</label>
                        <textarea name="desc" class="form-control" ></textarea>
                    </div>
                </div>
                <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./category" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>