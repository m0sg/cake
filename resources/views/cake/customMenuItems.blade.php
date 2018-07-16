@foreach($items as $item)
    <li {{ (url::current() ==  $item->url()) ? "class='active'" : ''}} >

        <a href="{{ $item->url() }}">{{ $item->title }}</a>
        @if($item->hasChildren())
            <ul>
                @include(env('THEME').'.customMenuItems',['items'=>$item->children()])
            </ul>
        @endif

    </li>
@endforeach