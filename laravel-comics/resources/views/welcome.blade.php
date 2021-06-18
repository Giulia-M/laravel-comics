@extends('layout.default')

@section('page_title', 'Homepage')



@section('content')
{{-- @dump($moviesList) --}}
<div class="movie-container">

    @foreach($moviesList as $valueMovie)
        <div class="single-movie">
            <img src="{{ $valueMovie['thumb'] }}" alt="movie">
            <h4>{{  $valueMovie['series'] }}</h4>
        </div>
    @endforeach
</div>
@endsection
