<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title> @yield('title') </title>
</head>
<body>
    @include('components.header')
    
    @yield('content')
</body>
<script type="text/javascript" src="/js/header.js"></script>
@yield('javascript')
</html>