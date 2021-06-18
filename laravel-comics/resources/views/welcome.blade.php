@extends('layout.default')

@section('page_title', 'Homepage')



@section('content')
{{-- @dump($moviesList) --}}
<main>
    <div class="movie-container">

        @foreach($moviesList as $valueMovie)
            <div class="single-movie">
                <div class="features-image">
                    <div class="wrap-only-img">

                        <img src="{{ $valueMovie['thumb'] }}" alt="movie">
                    </div>
                    <h4>{{  $valueMovie['series'] }}</h4>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection
