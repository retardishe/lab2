<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function Index()
    {

    }

    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function getAll(){
        $view = $this->product->getAllProducts();
        $view = Product::paginate(8);
        return view('products',['view'=>$view]);
    }
}