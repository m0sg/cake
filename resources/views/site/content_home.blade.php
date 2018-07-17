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
    <div class="double-a c">
        <div>
            <h2 class="header-a a"><span class="scheme-b">Made For You</span><br> With Love</h2>
            <p class="scheme-c">Suspendisse leo odio, scelerisque id ullamcorper vitae, iaculis bibendum magna. Etiam convallis porttitor diam at rutrum. Suspendisse potenti. In commodo sapien ac congue luctus. Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi.</p>
            <p class="link-a"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">et accumsan mi tincidunt vel</a></p>
        </div>
        <ul class="gallery-d">
            <li class="a"><img src="{{ asset ('assets/images/213x213(1).gif')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(1).gif" alt="Placeholder" width="213" height="213"></li>
            <li class="b"><img src="{{ asset ('assets/images/213x213(2).gif')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(2).gif" alt="Placeholder" width="213" height="213"></li>
            <li class="c"><img src="{{ asset ('assets/images/213x213(3).gif')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(3).gif" alt="Placeholder" width="213" height="213"></li>
            <li class="d"><img src="{{ asset ('assets/images/213x213(4).gif')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(4).gif" alt="Placeholder" width="213" height="213"></li>
        </ul>
    </div>



    <p class="scheme-f">Ready to Work With Us?<br> <a href="/contacts">let`s work together</a></p>

    @if(isset($products) && is_object($products))
        <h2 class="header-a a"><span class="scheme-b">Most</span> Popular Cakes</h2>
        <ul class="gallery-e">
            @foreach($products as $product)
                @if($product->id < 7)
                    <li><a href="{{ '/shop/'.$product->category_alias.'/'.$product->alias }}"><img src="{{ asset ('assets/images/'.$product->img)}}" alt="Placeholder" width="390" height="244"> <span class="title">{{  $product->title }}</span>  {{  $product->desc }}</a></li>
                @endif
            @endforeach
        </ul>
        <p class="link-a"><a href="/shop">View all products</a></p>
    @endif
    {{--<!--				<ul class="gallery-f">--}}
                        {{--<li><img src="temp/650x433(1).gif" alt="Placeholder" width="650" height="433"> <span><span class="title">Croissant</span> Aenean egestas placerat nisi usce sed libero eget nulla <span class="scheme-e">$ 3.99</span></span></li>--}}
                        {{--<li><img src="temp/650x433(2).gif" alt="Placeholder" width="650" height="433"> <span><span class="title scheme-b">Colorful muffins</span> Aenean egestas placerat nisi usce sed libero eget nulla <span class="scheme-e">$ 3.99</span></span></li>--}}
                    {{--</ul>--}}
    {{---->				<div class="slider-b">--}}
        {{--<div>--}}
            {{--<figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset ('assets/images/customer.png')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>--}}
            {{--<p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset ('assets/images/customer.png')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>--}}
            {{--<p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset ('assets/images/customer.png')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>--}}
            {{--<p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset ('assets/images/customer.png')}}" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>--}}
            {{--<p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>--}}
        {{--</div>--}}
    {{--</div>--}}
</article>