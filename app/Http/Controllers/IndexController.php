<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;


use App\Pages;
use App\Products;
use Illuminate\Support\Facades\Mail;
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
                $image->make($product->img)->resize(null, 204, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('cache/' . $product->img);
            }, 10, true);
        }



        return view('site.index', array(
                                        'menu' => $menu,
                                        'products' => $products,
                                        'pages' => $pages,
        ));

    }





}
