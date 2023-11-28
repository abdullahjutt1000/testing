<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function openProductDetails()
    {

        $products = Product::all();

        return view("site.product-detail", $products);
    }

    public function allproducts()
    {

        $products = Product::all();

        return view("site.allproducts", compact("products"));
    }
}