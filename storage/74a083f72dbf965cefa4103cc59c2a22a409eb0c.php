<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật danh mục</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="./">Quản lý sản phẩm</a>
            <a class="nav-link" href="./category">Quản lý danh mục</a>
        </nav>
        <h3>Cập nhật danh mục</h3>
        <form action="./save-update-cate?id=<?php echo e($model->id); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="cate_name" class="form-control" value="<?php echo e($model->cate_name); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control" value="<?php echo e($model->slug); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Show Menu</label>
                        <input type="number" name="show_menu" class="form-control" value="<?php echo e($model->show_menu); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Desc</label>
                        <input type="text" name="desc" class="form-control" value="<?php echo e($model->desc); ?>">
                    </div>
                    <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./category" class="btn btn-danger">Hủy</a>
                </div>
                </div>
            </div>
        </form>
    </div><?php /**PATH C:\xampp\htdocs\PHP2\mvc\app\views/category/edit-form.blade.php ENDPATH**/ ?>