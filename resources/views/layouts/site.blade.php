<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title or "Cake" }}</title>
    <meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : '' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : '' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script type="text/javascript" src="{{ asset ('assets/js/head.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/screen.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Satisfy" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/print.css')}}" media="print">
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/images/favicon.ico')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>
<body>
<div id="root">

    @yield ('header')

    @yield ('content')

    @yield('footer')
</div>
<script type="text/javascript">
    head.load('{{ asset ('assets/js/jquery.min.js')}}','{{ asset ('assets/js/scripts.js')}}','{{ asset ('assets/js/mobile.js')}}')
</script>
</body>
</html>