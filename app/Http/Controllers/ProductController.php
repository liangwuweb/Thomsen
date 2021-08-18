<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Part;
use App\Category;

class ProductController extends Controller
{
    //
    public function getProduct($id) {

        //return $id;

        $product = Category::find($id);
        // $info = 'Product info about: ' . $product->name;
        // return $info;
        return view('Pages.product')->withProduct($product)->withPage('category');
    }
}
