<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Product;
use PharIo\Version\Exception;

class GetProdCategory extends Command
{
    protected $signature = 'product:categories {prod_id}';

    protected $description = 'Get symbol code of category by product\'s ID';

    public function handle()
    {
        $category = new Category();
        $product = new Product();

        try {
            $product_Id = (int)$this->argument('productId');
            $temp = $product->getProductById($product_Id);

            foreach ($temp as $product)
            {
                $categoryId = $product->cat_id;
            }

            $temp = $category->getCategoryById($categoryId);

            foreach ($temp as $category)
            {
                $code = $category->code;
            }
            $this->info("Symbol code: {$code}");
        }
        catch (Exception $ex) {
            echo 'Thrown exception: ',  $ex->getMessage(), "\n";
        }
    }
}