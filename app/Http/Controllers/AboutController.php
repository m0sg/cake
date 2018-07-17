<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class AboutController extends Controller
{
    //
    public function execute()
    {

        $pages = Pages::all();

        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }
        return view('site.about', array(
            'menu' => $menu,
        ));

    }
}
