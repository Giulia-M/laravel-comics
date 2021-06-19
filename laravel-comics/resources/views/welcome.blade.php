@extends('layout.default')

@section('page_title', 'Homepage')

@section('font_scrittura', "https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap")


@section('content')
{{-- @dump($moviesList) --}}
<main>
    <div class="maxi-container">
    
        <div class="title-movie">
            <h2>
                Current Series
            </h2>
        </div>
        
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
    </div>

    <div class="button-wrap">
        <button>

            <a href="">Load More</a>
        </button>
    </div>
</main>



@endsection
