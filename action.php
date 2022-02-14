<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Products;

if (isset($_GET['pages'])) {
    if ($_GET['pages'] == 'all-products') {
        $category =new category();
        $categories =$category->category();
        $product =new Products();
        $products =$product->index();
        include 'pages/allProducts.php';
    } elseif ($_GET["pages"] == "product-details")
    {
         $category =new Category();
        $categories =$category->category();
        $product = new Products();
        $productDetails= $product->getProductDetails($product)
        $products = $product ->getProductDetails()($_GET["category_id"]);

        include "pages/productDetails.php" ;
    }

    //mistak this line


    elseif ($_GET["pages"] == "product-details")
    {
        $category =new Category();
        $categories =$category->category();
        $product = new Products();
        $products = $product ->getProductDetails()($_GET["category_id"]);

        include "pages/productDetails.php" ;
    }
}