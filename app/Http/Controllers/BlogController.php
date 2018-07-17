<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Articles;

class BlogController extends Controller
{
    //
    public function execute()
    {

        $pages = Pages::all();
        $articles = Articles::all();


        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }




        return view('site.blog', array(
            'menu' => $menu,
            'articles' => $articles,
        ));

    }
}
