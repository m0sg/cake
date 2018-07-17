<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Pages;
use App\Products;
use Image;


class IndexController extends Controller
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


                foreach($products as $product) {
            $img = Image::cache(function ($image) use ($product) {
                $image->make("assets/images/" . $product->img)->resize(null, 204, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('cache/' . $product->img);
            }, 10, true);
        }



        return view('site.index', array(
                                        'menu' => $menu,
                                        'products' => $products,
        ));

    }

}
