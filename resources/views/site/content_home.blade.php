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

    <h2 class="header-a a"><span class="scheme-b">Most</span> Popular Cakes</h2>
    <p class="scheme-c">Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi.</p>
    @if(isset($products) && is_object($products))
            <ul class="gallery-e">
            @foreach($products as $product)
                    <li><a href="{{ '/shop/'.$product->category_alias.'/'.$product->alias }}"><img src="{{ asset ('cache/'.$product->img)}}" alt="Placeholder"> <span><span class="title">{{  $product->title }}</span>  {{  $product->desc }}</a></li>
            @endforeach
            </ul>
    @endif







</article>