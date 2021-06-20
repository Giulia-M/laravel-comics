@extends('layout.default')

@section('page_title', 'Homepage')

@section('font_scrittura', "https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap")


@section('content')
{{-- @dump($moviesList) --}}
<main>
    <section class="bg-dark">
    
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

                <a href="#">Load More</a>
            </button>
        </div>
    </section>

    <section class="blue-bg">
        <div class="max-cont">
            <div class="box-mod">
            
                <div class="img-comics-digital">
                    <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics">
                </div>

                <h4>DIGITAL COMICS</h4>
            </div>
            <div class="box-mod">
            
                <div class="img-comics-digital">
                    <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="buy-comics-digital-comics">
                </div>

                <h4>DC MERCHANDISE</h4>
            </div>

            <div class="box-mod">
            
                <div class="img-comics-digital">
                    <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="buy-comics-digital-comics">
                </div>

                <h4>subscriptions</h4>
            </div>
            
            <div class="box-mod">
            
                <div class="img-comics-digital">
                    <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="buy-comics-digital-comics">
                </div>

                <h4>comic shop locator</h4>
            </div>
            
            <div class="box-mod">
            
                <div class="img-comics-digital">
                    <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="buy-comics-digital-comics">
                </div>

                <h4>dc power visa</h4>
            </div>

            
        </div>
    </section>

    
</main>



@endsection


