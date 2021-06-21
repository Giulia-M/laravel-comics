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
                        <span class="capitaliz">Us</span> Price: <span class="price-color-white">{{ $comic['price'] }}</span>

                    
                    </h2>
                    <h2 class="uppercase">
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

            <div class="wrap-description">
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

    <section class="sec-2" >
        <div class="row">
            <div class="col-5 offset-1">
                <h2>Talent</h2>
                <div class="row">
                    <div class="col-4">

                        <span>
                            Art by:
                        </span>
                    </div>

                    <div class="col-8">

                        <div class="artists">
                            @foreach($comic['artists'] as $key => $value)
                            
                                <span>
                                    {{$value}} 
                                    {{-- {{ implode(', ', $value) }} --}}
                                </span>
                            @endforeach
                        
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-4">
                        <span>Written By:</span>
                    </div>

                    <div class="col-8">
                    
                        <div class="written-by">
                                
                            @foreach($comic['writers'] as $key => $value)
                            
                                <span>
                                    {{$value}} 
                                    {{-- {{ implode(', ', $value) }} --}}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6">
                <h2>Specs</h2>


                <div class="row">
                    <div class="col-4">

                        <span>
                            Series:
                        </span>
                    </div>

                    <div class="col-8">

                        <div class="series">
                            
                            {{ $comic['series']}}
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-4">
                        <span>U.S. Price:</span>
                    </div>

                    <div class="col-8">
                    
                        <div>
                                
                            {{ $comic['price']}}
                        </div>
                    </div>
                </div>


                <div class="row border-bottom">
                    <div class="col-4 ">
                        <span>On Sale Date:</span>
                    </div>

                    <div class="col-8">
                    
                        <div>
                                
                            {{ $comic['sale_date']}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>

        <div class="utility-links">
            <div class="wrapper">

                <div class="col-3">
                    <h5>digital comics</h5>

                    <div class="icon-container">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                </div>

                <div class="col-3">
                    <h5>shop dc</h5>

                    <div class="icon-container">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    </div>
                </div>

                <div class="col-3">
                    <h5>comic shop locator</h5>

                    <div class="icon-container">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    </div>
                </div>

                <div class="col-3">
                    <h5>subscriptions</h5>

                    <div class="icon-container">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    </div>

                </div>

            </div>
        </div>
    </section>


   


@endsection