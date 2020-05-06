<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = "products";
    public $fillable =['name', 'cate_id', 'price','image', 'short_desc', 'detail', 'star' , 'views'];   
}

?>