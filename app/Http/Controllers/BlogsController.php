<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends SiteController
{
    //
    public function __construct()
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Models\Menus));

        $this->template = env('THEME'). '.blogs';
    }
}
