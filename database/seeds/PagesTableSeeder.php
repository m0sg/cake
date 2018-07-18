<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (pages::count()  == 0){
            pages::create([
                'name' => 'Главаня',
                'text' => 'We Implement Your Delicious Dreams',
                'alias' => 'home',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Магазин',
                'text' => '',
                'alias' => 'shop',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Торты',
                'text' => '',
                'alias' => 'cake',
                'parent' => '2',
            ]);
            pages::create([
                'name' => 'Пирожные',
                'text' => '',
                'alias' => 'pastries',
                'parent' => '2',
            ]);
            pages::create([
                'name' => 'Блог',
                'text' => '',
                'alias' => 'blog',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Шоурум',
                'text' => 'Текст шоурум',
                'alias' => 'showroom',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'О нас',
                'text' => 'Текст о нас',
                'alias' => 'about',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Контакты',
                'text' => 'Текст контакты',
                'alias' => 'contacts',
                'parent' => '0',
            ]);
        }
    }
}
