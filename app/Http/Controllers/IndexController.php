<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductsRepository;
use Config;

class IndexController extends SiteController
{
    public function __construct(ProductsRepository $p_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menus));

        $this->p_rep = $p_rep;
        $this->template = env('THEME'). '.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->getProducts();

        $content = view(env('THEME').'.content')->with('products', $products)->render();

        $this->vars = array_add($this->vars, 'content', $content);

        $this->keywords = "Home Page";
        $this->meta_desc = "Home Page";
        $this->title = "Home Page";





        return $this->renderOutput();
    }
    protected function getProducts(){
        $products = $this->p_rep->get('*', Config::get('settings.home_port_count'));

        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
