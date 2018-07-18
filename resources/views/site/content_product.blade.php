<article id="featured">
    <h2>Market</h2>
    <figure><img src="{{ asset ('assets/images/blog.jpg')}}" alt="Placeholder"></figure>
</article>
<section id="content">
    <ul class="breadcrumbs">
        <li><a href="{{ route('home') }}">Главная/</a></li>
        <li><a href="{{ route('shop') }}">Магазин/</a></li>
        <li>{{ $product->title }}</li>
    </ul>
    <div class="cols-a">
        <article>
            <header>
                <img src="{{ asset ('assets/images/'.$product['img'])}}" talt="Placeholder">
                <h2>{{ $product->title }}</h2>
            </header>
            <p>{{  $product->desc }}</p>
            <p>{{  $product->text }}</p>
            <p>Стоимость {{  $product->price }} руб.</p>
        </article>
    </div>

</section>