<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;
use App\Category;

class ProductController extends Controller
{
    //
    public function getProduct($id) {

        $product = Category::find($id);
        //$info = 'Product info about: ' . $product->name;
        return view('Pages.product')->withProduct($product)->withPage('category');
    }
}
