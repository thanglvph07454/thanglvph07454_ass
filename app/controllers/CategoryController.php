<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController {
    public function index(){
        echo 'Danh sách Category';
    }
    public function addCategory(){
        // lấy dữ liệu từ bảng danh mục
        $cates = Category::all();
        $this->render('category.add-form', ['cates' => $cates]);
    }
    
    public function saveAddCate(){
        $requestData = $_POST;
        $model = new Category();
        $model->fill($requestData);
        $model->save();
        header('location: ./category');  
    }

    public function editCategory(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;

        if(!$removeId){
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        } 
        // kiểm tra xem id có thật hay không
        $model = Category::find($removeId);
        
        if(!$model){
            $msg = "Id không tồn tại!";
            header("location: ./?msg=$msg");
            die;
        }
        $cates = Category::all();
        $this->render('category.edit-form', [
                                    'cates' => $cates,
                                    'model' => $model
                                                ]);

    }

    public function saveEditCate(){
        $id = $_GET['id'];
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;

        if(!$removeId){
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        } 
        // kiểm tra xem id có thật hay không
        $model = Category::find($id);
        
        if(!$model){
            $msg = "id không tồn tại!";
            header("location: ./?msg=$msg");
            die;
        }
        $requestData = $_POST;
        $model->fill($requestData);
        $model->save();
        header('location: ./category');                                        
    }

    public function remove(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$removeId){
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        } 
        // kiểm tra xem id có thật hay không
        $model = Category::find($removeId);
        
        if(!$model){
            $msg = "id không tồn tại!";
        }else{
            Category::destroy($removeId);
            $msg = "Xóa danh mục thành công";
        }
        header("location: ./category?msg=$msg");
        die;
    }

}


?>