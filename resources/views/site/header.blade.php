<header id="top">
    <h1><a href="home" accesskey="h">The Cakery Shop</a></h1>

    @if(isset($menu))
        <nav id="nav">
            <ul>
            @foreach($menu as $item)
                @if($item['parent'] == 0)
                    <li class=""><a href="{{ $item['alias'] }}">{{ $item['title'] }}</a></li>
                @endif
             @endforeach
            </ul>
        </nav>
    @endif
</header>