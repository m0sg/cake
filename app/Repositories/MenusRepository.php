<?php

namespace App\Repositories;
use App\Models\Menus;

class MenusRepository extends Repository {

    public function __construct(Menus $menu){
        $this->model = $menu;
    }

}

?>