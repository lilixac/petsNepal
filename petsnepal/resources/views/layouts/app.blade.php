<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
        {{-- <link rel="icon" href="{{asset('images/icons/cart.png')}}"> --}}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 </head>

    <body class="container">
    
       <div class="content" style="margin-top:20px;">

              @yield('content')

        </div>

    </body>


    <script>



</html>