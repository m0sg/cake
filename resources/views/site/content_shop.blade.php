<section id="welcome">
    <article class="a">
        <header>
            <h2>Market</h2>
        </header>
        <figure><img src="{{ asset ('assets/images/shop.jpg')}}" alt="Placeholder"></figure>
    </article>
</section>
<article id="content">
    <ul class="breadcrumbs">
        <li><a href="{{ route('home') }}">Главная/</a></li>
        <li><a href="{{ route('shop') }}">Магазин</a></li>
    </ul>
@if(isset($products) && is_object($products))
        <h2 class="header-a a"><span class="scheme-b">All</span> Products</h2>
                    <div class="filter-b">
                        <nav>
                            <ul class="list-h">
                                <li><a href="/home" data-filter="*">Все</a></li>
                                @foreach($categories as $category)
                                    @if($category['parent_id'] != 0)
                                        <li><a href="/home" data-filter=".{{ $category['id'] }}">{{ $category['title'] }}</a></li>

                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                        <ul class="gallery-e">

                            @foreach($products as $product)
                                <li class="{{ $product['category_id'] }}"><a href="{{ '/shop/'.$product->alias }}"><img src="{{ 'cache/'.$product->img }}" alt="Placeholder"> <span><span class="title">{{  $product->title }}</span>  {{  $product->desc }}</a></li>
                            @endforeach
                        </ul>
                    </div>
    @endif

</article>