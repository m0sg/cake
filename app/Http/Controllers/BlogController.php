<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Articles;
use Image;

class BlogController extends Controller
{
    //
    public function execute()
    {

        $pages = Pages::all();
        $articles = Articles::paginate(6);

        $menu = array();
        foreach ($pages as $page){
            $item = array('title' => $page->name, 'alias' => $page->alias, 'parent' => $page->parent);
            array_push($menu, $item);
        }


        foreach($articles as $articl) {
            $img = Image::cache(function ($image) use ($articl) {
                $image->make($articl->img)->resize(null, 273, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('cache/' . $articl->img);
            }, 10, true);
        }

        return view('site.blog', array(
            'menu' => $menu,
            'articles' => $articles,
        ));

    }
}
