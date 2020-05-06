<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class HomeController extends BaseController{

    public function index(){
        $products = Product::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('homepage.index', [
                                            'listItem' => $products,
                                            'errMsg' => $msg
                                        ]);
    }
    
    public function detail(){
        $categories = Category::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('homepage.category', [
                                            'listItem' => $categories,
                                            'errMsg' => $msg
                                        ]);
    }

    

}


?>