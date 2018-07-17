<?php

use Illuminate\Database\Seeder;
use App\Articles;

class ArticlesTableSeeder extends Seeder
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
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_1',
                'img' => 'article_1.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_2',
                'img' => 'article_2.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_3',
                'img' => 'article_3.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_4',
                'img' => 'article_4.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_5',
                'img' => 'article_5.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_6',
                'img' => 'article_6.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_7',
                'img' => 'article_1.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_8',
                'img' => 'article_2.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_9',
                'img' => 'article_3.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_10',
                'img' => 'article_4.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_11',
                'img' => 'article_5.jpg',
            ]);
            articles::create([
                'title' => 'Duis vehicula nunc dictum risus faucibus, ut dictum tellus adipiscing',
                'text' => 'Vivamus ipsum eros, sollicitudin non neque nec, varius ultricies sem. Quisque leo justo, tincidunt quis consequat interdum, posuere nec dolor. Praesent interdum, augue et hendrerit tincidunt, dolor purus lobortis urna, ac sagittis turpis magna eu sem. Proin pretium, metus eu dictum fermentum, turpis magna hendrerit lacus, sed lacinia tellus eros sed nibh. Aliquam erat volutpat. Nullam eu tempor velit, sed imperdiet nibh.

Etiam nibh libero, tempor ac mi sit amet, maximus rutrum ipsum. Duis facilisis tellus justo, sed venenatis ligula porta a. Integer id enim urna. Aenean id tortor convallis, elementum magna non, faucibus nulla.

Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
Mauris in aliquam velit, sed fringilla dui.
Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.

1.Fusce sapien quam, ultrices eget bibendum at, laoreet eu justo.
2.Mauris in aliquam velit, sed fringilla dui.
3.Proin imperdiet rhoncus cursus.
Mauris diam enim, dictum non lacus at, faucibus vestibulum neque. Mauris tempus sem ac blandit molestie. Ut fermentum, diam scelerisque blandit vestibulum, est dolor fermentum odio, in ullamcorper nunc ante id velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a odio neque. Vestibulum ac pulvinar nulla. Nulla aliquam porttitor est, condimentum finibus libero eleifend volutpat.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'article_12',
                'img' => 'article_6.jpg',
            ]);
        }
    }
}




