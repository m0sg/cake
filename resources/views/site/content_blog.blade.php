<article id="featured">
    <h2>Delicious News</h2>
    <figure><img src="1300x371(1).gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/1300x371(1).gif" alt="Placeholder" width="1300" height="450"></figure>
</article>
<section id="content">
    <div class="news-b">
    @if(isset($articles) && is_object($articles))
            @foreach($articles as $articl)
                <article>
                    <a href="{{ '/blog/'.$articl->alias }}">
                    <figure><img src="{{ 'cache/'.$articl->img }}" alt="{{ $articl->title }}"></figure>
                    <h3>{{ $articl->title }}</h3>
                    <ul class="list-a">
                        <li class="a">{{ $articl->created_at }}</li>
                    </ul>
                    <p>{{ $articl->desc }}</p>
                    </a>
                </article>
            @endforeach
    @endif

    </div>
    <nav class="pagination-a">
            {{ $articles->links() }}
    </nav>
</section>
