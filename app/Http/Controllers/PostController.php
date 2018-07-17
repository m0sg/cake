<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Articles;
use App\Tags;

class PostController extends Controller
{
    //
    public function execute($alias)
    {
        if (!$alias) {
            abort(404);
        }

        $pages = Pages::all();
        $articles = Articles::all();
        $tags = Tags::all();


        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }

        $post = Articles::where('alias', strip_tags($alias))->first();


        return view('site.post', array(
            'menu' => $menu,
            'articles' => $articles,
            'post' => $post,
            'tags' => $tags,
        ));

    }


}
