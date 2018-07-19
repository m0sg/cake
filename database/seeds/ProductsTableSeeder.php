<?php

use Illuminate\Database\Seeder;
use App\Products;

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
        if (products::count() == 0) {
            products::create([
                'title' => 'Свадебный 1',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Wedding1',
                'img' => 'images\uploads\Wedding1.jpg',
                'category_id' => '3',
                'price' => '10',
                'home' => '1',

            ]);
            products::create([
                'title' => 'Свадебный 2',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Wedding2',
                'img' => 'images\uploads\Wedding2.jpg',
                'category_id' => '3',
                'price' => '20',

            ]);
            products::create([
                'title' => 'Свадебный 3',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Wedding3',
                'img' => 'images\uploads\Wedding3.jpg',
                'category_id' => '3',
                'price' => '30',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Детский 1',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Childrens1',
                'img' => 'images\uploads\Childrens1.jpg',
                'category_id' => '4',
                'price' => '40',
            ]);
            products::create([
                'title' => 'Детский 2',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Childrens2',
                'img' => 'images\uploads\Childrens2.jpg',
                'category_id' => '4',
                'price' => '50',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Детский 3',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Childrens3',
                'img' => 'images\uploads\Childrens3.jpg',
                'category_id' => '4',
                'price' => '60',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Корпоративный 1',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Corporate1',
                'img' => 'images\uploads\Corporate1.jpg',
                'category_id' => '5',
                'price' => '70',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Корпоративный 2',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Corporate2',
                'img' => 'images\uploads\Corporate2.jpg',
                'category_id' => '5',
                'price' => '80',
            ]);
            products::create([
                'title' => 'Корпоративный 3',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Corporate3',
                'img' => 'images\uploads\Corporate3.jpg',
                'category_id' => '5',
                'price' => '90',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Эклер 1',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Eclairs',
                'img' => 'images\uploads\Eclairs1.jpg',
                'category_id' => '6',
                'price' => '100',
            ]);
            products::create([
                'title' => 'Зефир 1',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Zefir',
                'img' => 'images\uploads\Zefir1.jpg',
                'category_id' => '7',
                'price' => '110',
            ]);
            products::create([
                'title' => 'Макарони 1',
                'text' => '<ol>	<li>Свойство товара 1</li>	<li>Свойство товара 2</li>	<li>Свойство товара 3</li></ol>',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Macaroni',
                'img' => 'images\uploads\Macaroni1.jpg',
                'category_id' => '8',
                'price' => '120',
            ]);
        }
    }
}
