<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <div class="container">
        <h2 class="my-4"> Comics
        </h2>
        <div class="row">
            @foreach ($comics as $comic )
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ $comic['thumb']}}" >
                        <div class="card-body">
                            <h4>{{$comic['title']}}</h4>
                        </div>
                    </div>
                
                    
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.footer')
</body>