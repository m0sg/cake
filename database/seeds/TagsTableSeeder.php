<?php

use Illuminate\Database\Seeder;
use App\Models\Tags;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Tags::count()  == 0){
            tags::create([
                'title' => 'Cake',
                'alias' => 'Cake',
            ]);
            tags::create([
                'title' => 'Chocolate',
                'alias' => 'Chocolate',
            ]);
            tags::create([
                'title' => 'Muffins',
                'alias' => 'Muffins',
            ]);
            tags::create([
                'title' => 'Bakery',
                'alias' => 'Bakery',
            ]);
            tags::create([
                'title' => 'Holiday',
                'alias' => 'Holiday',
            ]);
            tags::create([
                'title' => 'Present',
                'alias' => 'Present',
            ]);
            tags::create([
                'title' => 'Chief',
                'alias' => 'Chief',
            ]);
            tags::create([
                'title' => 'Cheesecake',
                'alias' => 'Cheesecake',
            ]);


        }
        $articles = App\Models\Articles::find(1);
        $articles->tags()->attach([1,5]);

        $articles = App\Models\Articles::find(2);
        $articles->tags()->attach([2,6]);

        $articles = App\Models\Articles::find(3);
        $articles->tags()->attach([3,7]);

        $articles = App\Models\Articles::find(4);
        $articles->tags()->attach([4,8]);

        $articles = App\Models\Articles::find(5);
        $articles->tags()->attach([5,1]);

        $articles = App\Models\Articles::find(6);
        $articles->tags()->attach([6,2]);

        $articles = App\Models\Articles::find(7);
        $articles->tags()->attach([7,3]);

        $articles = App\Models\Articles::find(8);
        $articles->tags()->attach([8,4]);

        $articles = App\Models\Articles::find(9);
        $articles->tags()->attach([1,5]);

        $articles = App\Models\Articles::find(10);
        $articles->tags()->attach([2,6]);

        $articles = App\Models\Articles::find(1);
        $articles->tags()->attach([3,7]);

        $articles = App\Models\Articles::find(12);
        $articles->tags()->attach([4,8]);




    }
}
