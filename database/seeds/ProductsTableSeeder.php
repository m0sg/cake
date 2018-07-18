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
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Wedding1',
                'img' => 'Wedding1.jpg',
                'category_alias' => 'Wedding',
                'price' => '10',
                'home' => '1',

            ]);
            products::create([
                'title' => 'Свадебный 2',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Wedding2',
                'img' => 'Wedding2.jpg',
                'category_alias' => 'Wedding',
                'price' => '20',

            ]);
            products::create([
                'title' => 'Свадебный 3',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Wedding3',
                'img' => 'Wedding3.jpg',
                'category_alias' => 'Wedding',
                'price' => '30',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Детский 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Childrens1',
                'img' => 'Childrens1.jpg',
                'category_alias' => 'Childrens',
                'price' => '40',
            ]);
            products::create([
                'title' => 'Детский 2',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Childrens2',
                'img' => 'Childrens2.jpg',
                'category_alias' => 'Childrens',
                'price' => '50',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Детский 3',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Childrens3',
                'img' => 'Childrens3.jpg',
                'category_alias' => 'Childrens',
                'price' => '60',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Корпоративный 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Corporate1',
                'img' => 'Corporate1.jpg',
                'category_alias' => 'Corporate',
                'price' => '70',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Корпоративный 2',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Corporate2',
                'img' => 'Corporate2.jpg',
                'category_alias' => 'Corporate',
                'price' => '80',
            ]);
            products::create([
                'title' => 'Корпоративный 3',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Corporate3',
                'img' => 'Corporate3.jpg',
                'category_alias' => 'Corporate',
                'price' => '90',
                'home' => '1',
            ]);
            products::create([
                'title' => 'Эклер 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Eclairs',
                'img' => 'Eclairs1.jpg',
                'category_alias' => 'Eclairs',
                'price' => '100',
            ]);
            products::create([
                'title' => 'Зефир 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Zefir',
                'img' => 'Zefir1.jpg',
                'category_alias' => 'Zefir',
                'price' => '110',
            ]);
            products::create([
                'title' => 'Макарони 1',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ornare enim, pellentesque sodales ipsum. Praesent tempus, sem non iaculis porta, purus turpis ullamcorper ante, luctus fringilla ipsum diam vel tellus. Pellentesque eu quam tellus. Proin at auctor quam. Quisque ornare imperdiet diam sit amet tristique. Nulla tincidunt felis a velit vehicula lacinia. Nullam et risus lacus. Fusce eget iaculis enim. Morbi vulputate placerat nisl eget semper. Vivamus nec varius mauris. Pellentesque id elementum tortor. Vivamus convallis turpis ac scelerisque posuere. Vivamus rhoncus ligula scelerisque neque efficitur iaculis.

Curabitur suscipit at neque ac semper. Sed mauris lectus, porttitor nec venenatis a, efficitur in orci. Aliquam vulputate, libero sed convallis suscipit, augue velit consequat ligula, in pretium dolor eros ut lectus. Integer dignissim et ligula a sagittis. Praesent sit amet sodales turpis. Vivamus faucibus ligula quis mauris consectetur mollis. Duis vitae porta quam. Quisque posuere vulputate tincidunt. Vestibulum at pellentesque nibh.

Integer accumsan orci in felis porta dapibus. Pellentesque non tincidunt nulla. Curabitur lobortis, velit eu dapibus lobortis, velit magna consequat sapien, ac maximus felis ipsum venenatis lorem. Sed a molestie tellus, eu lacinia leo. Aliquam dapibus molestie eros eget tristique. Phasellus efficitur rhoncus diam vel molestie. Mauris fringilla iaculis ante, quis convallis libero efficitur non. Sed at euismod est, vitae eleifend tortor. Phasellus pharetra eu tortor nec rhoncus. Donec semper vel libero suscipit aliquam. Fusce ornare tortor hendrerit lorem tempus, a tincidunt enim molestie.

Duis dui magna, vulputate eget mi ac, pharetra vehicula massa. Phasellus vitae nunc porta, laoreet mi ut, accumsan massa. Nam dignissim porta placerat. Nunc porta enim et placerat sagittis. Etiam bibendum, tortor vitae pretium ornare, neque libero bibendum erat, ac malesuada mauris augue ultrices justo. Ut semper mi ut lectus lacinia vestibulum. Fusce eleifend, ex quis accumsan aliquet, justo turpis ornare nulla, vel sollicitudin turpis enim sit amet est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu magna ac nulla consectetur gravida non non ipsum. Integer mi dolor, mollis et felis non, pellentesque faucibus felis. Mauris mollis ligula id egestas pulvinar. Curabitur sed erat commodo, fermentum massa porttitor, efficitur ex. Curabitur nunc elit, iaculis quis eros eget, condimentum varius magna. Proin bibendum, diam nec sodales scelerisque, sem dui tincidunt mi, eu molestie eros nulla a lacus. Vestibulum pellentesque, risus tempor tempus cursus, justo purus convallis massa, vel porttitor lectus enim eu risus.',
                'desc' => 'Sed porta, nulla nec tincidunt viverra, est dui lobortis erat, ut euismod dui massa eget ipsum. Integer a lobortis mauris. In quis lectus sem. Nullam sagittis pellentesque ligula, eget elementum nibh consectetur in. Maecenas convallis accumsan hendrerit. Donec a augue velit.',
                'alias' => 'Macaroni',
                'img' => 'Macaroni1.jpg',
                'category_alias' => 'Macaroni',
                'price' => '120',
            ]);
        }
    }
}
