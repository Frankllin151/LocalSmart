<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LocalSmart</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
        <link rel="stylesheet" href="{{ asset('css/filtro.css') }}">
        <link rel="stylesheet" href="{{ asset('css/apartamentos-produto.css') }}">
        
        
        

  
    </head>
   <body>
    @include('components.partials.header')
    @include('components.partials.banner' , ["dado" => "aquiodado"])
    @include('components.partials.filtro')
    @include('components.partials.apartamentos')
   
   </body>
   <script src="{{ asset('js/header.js') }}"></script>

</html>
