<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];

    public function index()
{
    return [
        0=> [
            "id" =>1,
            "category_id"=>1,
            "name"=> "T-shart",
            "price"=> 700,
            "describtion"=>"product description ",
            "image"=>"assets/img/s3.jpg",

        ],
        1=> [
            "id" =>2,
            "category_id"=>2,
            "name"=> "T-shart",
            "price"=> 700,
            "describtion"=>"product description ",
            "image"=>"assets/img/s4.jpg",

        ],
        2=> [
            "id" =>3,
            "category_id"=>3,
            "name"=> "T-shart",
            "price"=> 900,
            "describtion"=>"product description ",
            "image"=>"assets/img/pp.jpg",

        ],
        3=> [
            "id" =>4,
            "category_id"=>4,
            "name"=> "Shari",
            "price"=> 4000,
            "describtion"=>"product description ",
            "image"=>"assets/img/sh4.jpg",

        ],
        4=> [
            "id" =>5,
            "category_id"=>1,
            "name"=> "kides  white T-shart",
            "price"=> 900,
            "describtion"=>"product description ",
            "image"=>"assets/img/sh5.jpg",

        ],
        5=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "describtion"=>"product description ",
            "image"=>"assets/img/s4.jpg",

        ],
        6=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/s3.jpg",

        ],
        7=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/s2.jpg",

        ],
        8=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/a1.jpg",

        ],
        9=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/a3.jpg",

        ],
        10=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/a4.jpg",

        ],
        11=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/72.jpg",

        ],
        12=> [
            "id" =>6,
            "category_id"=>1,
            "name"=> "kides black T-shart",
            "price"=> 900,
            "Describtion"=>"product description ",
            "image"=>"assets/img/71.jpg",

        ],
    ];
}
        public function shortProducts($categoryId)
        {
            $this->allProducts= $this->index();
            foreach ($this->allProducts as $product)
            {
                if($product["category_id"] == $categoryId)
                {
                   // $this->result .=$product;
                    array_push($this->result ,$product);
                }
            }
            return$this->result;
        }
        public function  getProductDetails ($product)
        {
            $this->allProducts =$this->index();
            foreach ($this->allProducts as $product);
            {
                if ($product["id"] == $productId)
                {
                    return $product;
                }
            }
        }
}