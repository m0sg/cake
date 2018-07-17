<article id="featured">
    <figure><img src="1300x371(2).gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/1300x371(2).gif" alt="Placeholder" width="1300" height="450"></figure>
</article>
<section id="content">
    <div class="cols-a">
        <article>
            <header>
                <figure><img src="{{ asset ('assets/images/'.$post['img'])}}" talt="Placeholder" width="870" height="490"> <figcaption>{{ $post['created_at'] }}</figcaption></figure>
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

			