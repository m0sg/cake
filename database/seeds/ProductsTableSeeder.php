<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (articles::count()  == 0){
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => '.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_1',
                'img' => 'article_1',
            ]);
        }
    }
}
