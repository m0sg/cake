<?php

use Illuminate\Database\Seeder;
use App\Models\Menus;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (menus::count()  == 0){
            menus::create([
                'title' => 'Главная',
                'path' => "/",
                'parent' => '0',
            ]);
            menus::create([
                'title' => 'Магазин',
                'path' => "/shop",
                'parent' => '0',
            ]);
            menus::create([
                'title' => 'Торты',
                'path' => "/shop/cake",
                'parent' => '2',
            ]);
            menus::create([
                'title' => 'Пирожные',
                'path' => "/shop/pastries",
                'parent' => '2',
            ]);
            menus::create([
                'title' => 'Блог',
                'path' => "/blog",
                'parent' => '0',
            ]);
            menus::create([
                'title' => 'Шоурум',
                'path' => "/showroom",
                'parent' => '0',
            ]);
            menus::create([
                'title' => 'О нас',
                'path' => "/about",
                'parent' => '0',
            ]);
            menus::create([
                'title' => 'Контакты',
                'path' => "/contacts",
                'parent' => '0',
            ]);
        }
    }
}
