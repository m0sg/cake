@if ($menu)
    <nav id="nav">
        <ul>
            @include(env('THEME').'.customMenuItems',['items'=>$menu->roots()])
        </ul>
    </nav>
@endif
