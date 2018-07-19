<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Pages;
use App\Products;
use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class SearchController extends Controller
{
    //
    public function execute(Request $request)
    {
        $name = $request->name;
        $articles = Articles::search($name)->paginate(15);

        dd($articles);

        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }

        return view('site.search', array(
            'menu' => $menu,
            'articles' => $articles,
        ));

    }
}
