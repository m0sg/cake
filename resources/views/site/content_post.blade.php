<article id="featured">
    <h2>Delicious News</h2>
    <figure><img src="{{ asset ('assets/images/blog.jpg')}}" alt="Placeholder"></figure>
</article>
<section id="content">
    <ul id="breadcrumbs">
        <li><a href="{{ route('home') }}">Главная/</a></li>
        <li><a href="{{ route('blog') }}">Блог/</a></li>
        <li>{{ $post['title'] }}</li>
    </ul>
</section>
<section id="content">
    <div class="cols-a">
        <article>

            <header>
                <figure><img src="{{ asset ($post['img'])}}" talt="Placeholder" width="870" height="490"> <figcaption>{{ $post['created_at'] }}</figcaption></figure>
                <h2>{{ $post['title'] }}</h2>
            </header>
            <p class="scheme-a">{{ $post['desc'] }}</p>
            <p>{{ $post['text'] }}</p>
        </article>



        <aside>
            <h3>Content Tags</h3>
            @if(isset($tags) && is_object($tags))
                <ul class="list-c">
                @foreach($tags as $tag)
                        <li><a href="{{ $tag->alias }}">{{ $tag->title }}</a></li>
                @endforeach
                </ul>
            @endif
        </aside>
    </div>

</section>

			