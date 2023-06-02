<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'cat_id',
        'code',
        'description',
        'price',
        'quantity',
        'img'
    ];

    public function getAllProducts()
    {
        $products = DB::table($this->table);
        return $products->get();
    }

    public function category_m()
    {
        return $this->belongsTo(Product::class);
    }

    public function  getProductByCategoryIdAndPrice($categoryId, $filter)
    {
        $products = DB::table($this->table)->where('cat_id','=',$categoryId);
        if(!empty($filter))
            $products = $products->where($filter);
        return $products->get();
    }

    public function getProductById($productId)
    {
        $products = DB::table($this->table)->where('id','=',$productId);

        return $products->get();
    }
}