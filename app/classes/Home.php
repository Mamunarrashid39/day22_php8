<?php


namespace App\classes;
use App\classes;


class Home
{
        public function index()
        {
            header("location: action.php?pages=all-products");
        }
}