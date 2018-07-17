<section id="welcome">
    <article class="a">
        <header>
            <h2>We Implement Your Delicious Dreams</h2>
            <p class="link-a"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">et accumsan mi tincidunt vel</a></p>
        </header>
        <figure><img src="{{ asset ('assets/images/1300x780.gif')}}" alt="Placeholder" width="1300" height="780"></figure>
    </article>
</section>
<article id="content">
    @if(isset($products) && is_object($products))
        <h2 class="header-a a"><span class="scheme-b">All</span> Products</h2>
        <ul class="gallery-e">
            @foreach($products as $product)
                    <li><a href="{{ '/shop/'.$product->category_alias.'/'.$product->alias }}"><img src="{{ asset ('assets/images/'.$product->img)}}" alt="Placeholder" width="390" height="244"> <span class="title">{{  $product->title }}</span>  {{  $product->desc }}</a></li>
            @endforeach
        </ul>
    @endif

</article>