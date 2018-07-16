<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title or "Cake" }}</title>
    <meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : '' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{ asset(env('THEME'))}}/js/head.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME'))}}/css/screen.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Satisfy" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME'))}}/css/print.css" media="print">
    <link rel="icon" type="image/x-icon" href="{{ asset(env('THEME'))}}/images/favicon.ico">
</head>
<body>
<div id="root">
    <header id="top">
        <h1><a href="index.html" accesskey="h">The Cakery Shop</a></h1>

        @yield('navigation')

    </header>
    <section id="welcome">
        <article class="a">
            <header>
                <h2>We Implement Your Delicious Dreams</h2>
                <p class="link-a"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">et accumsan mi tincidunt vel</a></p>
            </header>
            <figure><img src="{{ asset(env('THEME'))}}/images/1300x780.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/1300x780.gif" alt="Placeholder" width="1300" height="780"></figure>
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
                <li class="a"><img src="{{ asset(env('THEME'))}}/images/213x213(1).gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(1).gif" alt="Placeholder" width="213" height="213"></li>
                <li class="b"><img src="{{ asset(env('THEME'))}}/images/213x213(2).gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(2).gif" alt="Placeholder" width="213" height="213"></li>
                <li class="c"><img src="{{ asset(env('THEME'))}}/images/213x213(3).gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(3).gif" alt="Placeholder" width="213" height="213"></li>
                <li class="d"><img src="{{ asset(env('THEME'))}}/images/213x213(4).gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/213x213(4).gif" alt="Placeholder" width="213" height="213"></li>
            </ul>
        </div>
        <p class="scheme-f">Ready to Work With Us?<br> <a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">let`s work together</a></p>
        <h2 class="header-a a"><span class="scheme-b">Most</span> Popular Cakes</h2>
        <p class="scheme-c">Vivamus leo lacus, mattis a ante id, ultrices semper odio. Maecenas gravida ac mauris a vestibulum. Ut ac tristique nisl, vel porta nisi.</p>
        <ul class="gallery-e">
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/"><img src="{{ asset(env('THEME'))}}/images/cake1.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/cake1.gif" alt="Placeholder" width="390" height="244"> <span class="title">Cheesecake</span> Aenean egestas placerat nisi. Fusce sed libero tempus</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/"><img src="{{ asset(env('THEME'))}}/images/cake2.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/cake2.gif" alt="Placeholder" width="390" height="244"> <span class="title">Cheesecake</span> Aenean egestas placerat nisi. Fusce sed libero tempus</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/"><img src="{{ asset(env('THEME'))}}/images/cake3.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/cake3.gif" alt="Placeholder" width="390" height="244"> <span class="title">Cheesecake</span> Aenean egestas placerat nisi. Fusce sed libero tempus</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/"><img src="{{ asset(env('THEME'))}}/images/cake4.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/cake4.gif" alt="Placeholder" width="390" height="244"> <span class="title">Cheesecake</span> Aenean egestas placerat nisi. Fusce sed libero tempus</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/"><img src="{{ asset(env('THEME'))}}/images/cake5.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/cake5.gif" alt="Placeholder" width="390" height="244"> <span class="title">Cheesecake</span> Aenean egestas placerat nisi. Fusce sed libero tempus</a></li>
            <li><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/"><img src="{{ asset(env('THEME'))}}/images/cake6.gif" tppabs="http://templatation.net/Site-templates/Cakery/temp/cake6.gif" alt="Placeholder" width="390" height="244"> <span class="title">Cheesecake</span> Aenean egestas placerat nisi. Fusce sed libero tempus</a></li>
        </ul>
        <p class="link-a"><a href="index.htm" tppabs="http://templatation.net/Site-templates/Cakery/">View all products</a></p>
        <!--				<ul class="gallery-f">
                            <li><img src="temp/650x433(1).gif" alt="Placeholder" width="650" height="433"> <span><span class="title">Croissant</span> Aenean egestas placerat nisi usce sed libero eget nulla <span class="scheme-e">$ 3.99</span></span></li>
                            <li><img src="temp/650x433(2).gif" alt="Placeholder" width="650" height="433"> <span><span class="title scheme-b">Colorful muffins</span> Aenean egestas placerat nisi usce sed libero eget nulla <span class="scheme-e">$ 3.99</span></span></li>
                        </ul>
        -->				<div class="slider-b">
            <div>
                <figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset(env('THEME'))}}/images/customer.png" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>
                <p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>
            </div>
            <div>
                <figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset(env('THEME'))}}/images/customer.png" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>
                <p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>
            </div>
            <div>
                <figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset(env('THEME'))}}/images/customer.png" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>
                <p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>
            </div>
            <div>
                <figure class="image-a"><span class="a">Lucy</span> <img src="{{ asset(env('THEME'))}}/images/customer.png" tppabs="http://templatation.net/Site-templates/Cakery/temp/customer.png" alt="Placeholder" width="218" height="218"> <span class="b">Smitt</span></figure>
                <p class="scheme-c">Duis in pulvinar ante. Vivamus dolor nisl, venenatis ac neque vitae, porttitor feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent quis nisi quis eros adipiscing malesuada. Ut pharetra purus vel pellentesque vehicula. Vestibulum et ornare magna. Integer a lorem metus.</p>
            </div>
        </div>
    </article>

@yield ('footer')

</div>
<script type="text/javascript">
    head.load('{{ asset(env('THEME'))}}/js/jquery.min.js'/*tpa=http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js*/,'{{ asset(env('THEME'))}}/js/scripts.js'/*tpa=http://templatation.net/Site-templates/Cakery/javascript/scripts.js*/,'{{ asset(env('THEME'))}}/js/mobile.js'/*tpa=http://templatation.net/Site-templates/Cakery/javascript/mobile.js*/)
</script>
</body>
</html>