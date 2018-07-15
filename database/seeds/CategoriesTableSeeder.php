<?php

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (categories::count()  == 0){
            categories::create([
                'title' => 'Торты',
                'alias' => 'Cake',
            ]);

            categories::create([
                'title' => 'Пирожные',
                'alias' => 'Pastries',
            ]);

            categories::create([
                'title' => 'Свадебные',
                'parent_id' => '1',
                'alias' => 'Wedding',
            ]);
            categories::create([
                'title' => 'Детские',
                'parent_id' => '1',
                'alias' => 'Childrens',
            ]);
            categories::create([
                'title' => 'Праздничные',
                'parent_id' => '1',
                'alias' => 'Festive',
            ]);
            categories::create([
                'title' => 'Корпоративные',
                'parent_id' => '1',
                'alias' => 'Corporate',
            ]);

            categories::create([
                'title' => 'Эклеры',
                'parent_id' => '2',
                'alias' => 'Eclairs',
            ]);
            categories::create([
                'title' => 'Суфле',
                'parent_id' => '2',
                'alias' => 'Sufle',
            ]);
            categories::create([
                'title' => 'Макарони',
                'parent_id' => '2',
                'alias' => 'Macaroni',
            ]);
            categories::create([
                'title' => 'Тирамису',
                'parent_id' => '2',
                'alias' => 'Tiramisu',
            ]);



        }

    }
}
