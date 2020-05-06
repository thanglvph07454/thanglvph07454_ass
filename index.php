<?php
session_start();
// tôi muốn: "tất cả các request tới thư mục mvc phải bắt buộc đi qua file index.php"
// thu thập các url gửi lên project
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './vendor/autoload.php';
require_once './commons/database-config.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

switch ($url) {
    case '/':
        $ctr = new HomeController();
         $ctr->index();
        break;
    
    case 'category':
        $ctr = new HomeController();
         $ctr->detail();
        break;
    
    // case 'contact':
    //     $ctr = new HomeController();
    //     echo $ctr->contact();
    //     break;

    case 'add-product':
        $ctr = new ProductController();
         $ctr->addForm();
        break;
    case 'category-add':
        $ctr = new CategoryController();
        $ctr->addCategory();
        break; 
    case 'save-add-product':
        $ctr = new ProductController();
        $ctr->saveAdd();
        break;
    case 'save-add-category':
        $ctr = new CategoryController();
        $ctr->saveAddCate();
        break;
    case 'update-cate':
        $ctr = new CategoryController();
        $ctr->editCategory();
        break;
     case 'save-update-cate':
        $ctr = new CategoryController();
        $ctr->saveEditCate();
        break;     
    case 'delete-cate':
        $ctr = new CategoryController();
        $ctr->remove();
        break;
    case 'save-add-product':
        $ctr = new ProductController();
        $ctr->saveAdd();
        break;
    case 'remove-product':
        $ctr = new ProductController();
        $ctr->remove();
        break;    
    case 'edit-product':
        $ctr = new ProductController();
        $ctr->editForm();
        break;  
    case 'save-edit-product':
        $ctr = new ProductController();
        $ctr->saveEdit();
        break;    
    default:
         echo "Đường dẫn không tồn tại";
        break;
}

?>