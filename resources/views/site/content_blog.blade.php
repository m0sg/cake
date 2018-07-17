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
                    <figure><img src="{{ 'assets/images/'.$articl->img }}" alt="{{ $articl->title }}" width="485" height="273"></figure>
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
        <ul>
            <li class="prev"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">Previous page</a></li>
            <li class="active"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">1</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">2</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">3</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">4</a></li>
            <li class="next"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">Next page</a></li>
        </ul>
    </nav>
</section>
