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
                'img' => 'home.jpg',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Магазин',
                'text' => '',
                'alias' => 'shop',
                'img' => 'shop.jpg',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Торты',
                'text' => '',
                'alias' => 'cake',
                'img' => 'cake.jpg',
                'parent' => '2',
            ]);
            pages::create([
                'name' => 'Пирожные',
                'text' => '',
                'alias' => 'pastries',
                'img' => 'pastries.jpg',
                'parent' => '2',
            ]);
            pages::create([
                'name' => 'Блог',
                'text' => '',
                'alias' => 'blog',
                'img' => 'blog.jpg',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Шоурум',
                'text' => 'Текст шоурум',
                'alias' => 'showroom',
                'img' => 'showroom.jpg',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'О нас',
                'text' => 'Текст о нас',
                'alias' => 'about',
                'img' => 'about.jpg',
                'parent' => '0',
            ]);
            pages::create([
                'name' => 'Контакты',
                'text' => 'Текст контакты',
                'alias' => 'contacts',
                'img' => 'contacts.jpg',
                'parent' => '0',
            ]);
        }
    }
}
