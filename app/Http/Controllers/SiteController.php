<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Menu;

class SiteController extends Controller
{
    //
    protected  $a_rep;
    protected  $p_rep;
    protected  $m_rep;

    protected  $keywords;
    protected  $meta_desc;
    protected  $title;

    protected  $template;

    protected  $vars = array();


    protected  $contentRightBar = FALSE;
    protected  $contentLeftBar = FALSE;

    protected  $bar = FALSE;

    public function __construct(MenusRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput(){

        $menu = $this->getMenu();

        $navigation = view(env('THEME').'.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        $this->vars = array_add($this->vars, 'keywords', $this->keywords);
        $this->vars = array_add($this->vars, 'meta_desc', $this->meta_desc);
        $this->vars = array_add($this->vars, 'title', $this->title);


        $footer = view(env('THEME').'.footer')->render();
        $this->vars = array_add($this->vars, 'footer', $footer);

        return view($this->template)->with($this->vars);
    }


    protected function getMenu(){
        $menu = $this->m_rep->get();

        $mBuilder = Menu::make('MuNav', function ($m) use ($menu){

            foreach ($menu as $item){
                if ($item->parent == 0){
                    $m->add($item->title, $item->path)->id($item->id);
                }
                else {
                    if ($m->find($item->parent)){
                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }

        });
        return $mBuilder;
    }
}
