<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function getIndex() {

        $parentCategories = Category::where('parent_id',null)->get();
        return view('Pages.categories')->withParentCategories($parentCategories)->withPage('category');

    }

    public function getSubcatgory($id) {
        
        $subcategories = Category::where('parent_id',$id)->get();
        return view('Pages.subcategory')->withSubcategories($subcategories)->withPage('category');
        //return $subcategories;
    }
}
