<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{    
    private $products;
    private $category;
    
    public function Index()
    {

    } 

    public function __construct()
    {
        $this->category = new Category();
        $this->products = new Product();
    }

    public function getByID($id,Request $request){
        $view = $this->category->getCategoryById($id);
        $filters = [];

        if (!empty($request->prodPrice)){
            $price = $request->prodPrice;
            $filters[]=['products.price','=',$price];
        }

        $pro = $this->products->getProductByCategoryIdAndPrice($id,$filters);
        
        return view('categories',compact('view','pro'));
    }
}
