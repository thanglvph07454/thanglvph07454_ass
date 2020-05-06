<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Category</title>
</head>
<body>
<div class="container">
        <nav class="nav">
            <a class="nav-link" href="./">Quản lý sản phẩm</a>
            <a class="nav-link" href="./category">Quản lý danh mục</a>
        </nav>
        <p class="text-danger"><?php echo e($errMsg); ?></p>
    <table class="table table-stripped">
        
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Show Menu</th>
        <th>Desc</th>
        <th>
            <a href="./category-add" class="btn btn-success">Add New</a>
        </th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($pro->id); ?></td>
                <td><?php echo e($pro->cate_name); ?></td>
                <td><?php echo e($pro->slug); ?></td>
                <td><?php echo e($pro->show_menu); ?></td>
                <td><?php echo e($pro->desc); ?></td>    
                <td>
                    <a href="./update-cate?id=<?php echo e($pro->id); ?>" class="btn btn-primary">Edit</a>
                    <a href="./delete-cate?id=<?php echo e($pro->id); ?>" class="btn btn-danger">Remove</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\PHP2\mvc\app\views/homepage/category.blade.php ENDPATH**/ ?>