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
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function execute(Request $request)
    {
        $name = $request->search;
        $articles = Articles::search($name)->paginate(6);

        $menu = array();

        return view('site.search', array(
            'menu' => $menu,
            'articles' => $articles,
        ));

    }
}
