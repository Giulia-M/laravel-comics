@extends('layout.default')

@section ('page_title', "Comic")
@section('font_scrittura', "https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap")


@section('content')
    <div class="bg-blue">
        <div class="container">

            <div class="position-relative">

                <div class="comic-book">
                    <p>Comic Book</p>
                </div>

                <div class="position-absolute">
                
                    <img src="{{ $comic['thumb'] }}" alt="comic">
                </div>

                <div class="view-gallery">
                    <p>View Gallery</p>
                </div>
            </div>

        </div>
    </div>


    <div class="wrap">

        <div class="col-8">
        
            <h1>{{ $comic['title'] }}</h1>

            <div class="row">
                <div class="col-8">
                    <h2>
                        US Price: <span>{{ $comic['price'] }}</span>

                    
                    </h2>
                    <h2>
                        Available
                        
                    
                    </h2>

                </div>
                <div class="col-4">
                    <h2>
                        Check Availability
                        <span class="my-sort-down">
                            <i class=" fas fa-sort-down"></i>
                        </span>
                    
                    </h2>
                </div>

            </div>

            <div>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>


        </div>


        <div class="col-4 wrap-images-superman">
            <h2>Advertisement</h2>
            <div>
            
                <img src="{{ asset('images/adv.jpg')}}" alt="adv">
            </div>

        </div>

        


    </div>


@endsection