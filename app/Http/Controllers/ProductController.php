<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Categories;
use App\Products;
use Falur;;

class ProductController extends Controller
{
    public function execute($alias)
    {

        $pages = Pages::all();
        $categories = Categories::all();
        $products = Products::all();

        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }

        $product = Products::where('alias', strip_tags($alias))->first();



        if (!$product['alias']) {
            abort(404);
        }

        return view('site.product', array(
            'menu' => $menu,
            'categories' => $categories,
            'product' => $product,
            'products' => $products,
        ));

    }
}
