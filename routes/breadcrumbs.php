<?php
use App\Category;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('category', function (BreadcrumbTrail $trail): void {
    $trail->push('Main Categories', route('category'));
});

Breadcrumbs::for('subcategory.menu', function(BreadcrumbTrail $trail, Category $category): void {
    $trail->parent('category', $category);
    $trail->push($category->name, route('subcategory.menu', $category));
});

Breadcrumbs::for('product', function(BreadcrumbTrail $trail, Category $product): void{
    $trail->parent('subcategory.menu', $product->parentCat);
    $trail->push($product->name, route('product', $product));
});