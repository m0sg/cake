<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Products;
use App\Categories;
use Image;

class ShopController extends Controller
{
    //
    public function execute()
    {

        $pages = Pages::all();
        $products = Products::all();
        $categories = Categories::all();


        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }

        foreach($products as $produc) {
            $img = Image::cache(function ($image) use ($produc) {
                $image->make($produc->img)->resize(null, 273, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('cache/' . $produc->img);
            }, 10, true);
        }



        return view('site.shop', array(
            'menu' => $menu,
            'products' => $products,
            'categories' => $categories,
        ));

    }
}
