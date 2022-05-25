@extends('layout.layout')
@section('title', 'titolo del film')

@section('content')
<!-- codice per visuallizzare la singola card -->
<div class="col card text-center pt-5">
    <h5>{{$movie->title}}</h5>
    <h5>{{$movie->original_title}}</h5>
    <h6>{{$movie->nationality}}</h6>
    <h6>{{$movie->date}}</h6>
    <h6>{{$movie->vote}}</h6>
</div>

@endsection
