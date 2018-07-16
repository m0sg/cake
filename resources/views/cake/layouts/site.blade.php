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
    @yield ('content')

@yield ('footer')

</div>
<script type="text/javascript">
    head.load('{{ asset(env('THEME'))}}/js/jquery.min.js'/*tpa=http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js*/,'{{ asset(env('THEME'))}}/js/scripts.js'/*tpa=http://templatation.net/Site-templates/Cakery/javascript/scripts.js*/,'{{ asset(env('THEME'))}}/js/mobile.js'/*tpa=http://templatation.net/Site-templates/Cakery/javascript/mobile.js*/)
</script>
</body>
</html>