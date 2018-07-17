<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Products;

class ShopController extends Controller
{
    //
    public function execute()
    {

        $pages = Pages::all();
        $products = Products::all();


        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }
        return view('site.shop', array(
            'menu' => $menu,
            'products' => $products,
        ));

    }
}
