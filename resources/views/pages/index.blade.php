@extends('layout.layout')
@section('title', 'Home')

@section('content')
<main>
    <div class="bg-main py-4">
     <div class="container mt-4">
        <div class="row row-cols-4 g-3"> 
            @forelse ($movies as $key=> $movie)
            <div>
               <div class="col card text-center">
                  <h5>{{$movie->title}}</h5> 
                  <h5>{{$movie->original_title}}</h5>
                  <h6>{{$movie->nationality}}</h6>
                  <h6>{{$movie->date}}</h6>
                  <h6>{{$movie->vote}}</h6>
                 <a href="{{route('show', ['id' => $movie->id ])}}">vai alle info</a>
            </div> 
            </div>
            
            @empty 
                <p>Non ci sono film</p>
            @endforelse
        </div>

    </div>
</div>
</main>
@endsection






{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <script src=" {{ asset('js/app.js') }} "></script>
    <title>Movie</title>
</head>

<body>
    <header>
        <div class="container text-center">
            <h2>Movies</h2>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Movies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="bg-main">
             <div class="container mt-4">
                <div class="row row-cols-4"> 

                </div>

            </div>
        </div>
       
    </main>
    <footer>

    </footer>
</body>

</html> --}}
