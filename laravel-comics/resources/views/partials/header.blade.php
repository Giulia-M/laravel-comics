<header>
    <div class="blue-bg">
        <nav class="top-nav">
            <ul class="d-flex">
                <li class="list-item">
                    <a href="{{ route('visa')}}">DC POWER VISA
                        <span>&reg;</span> 

                    </a>

                    
                </li>
                <li class="list-item">
                    <a href="{{ route('additional-sites')}}">ADDITIONAL DC SITES
                        <i class=" fas fa-sort-down"></i>
                    </a>

                </li>
            </ul>
        </nav>
    </div>

    <div>
        {{-- nell if ternario l'index = 0 equivale a false  --}}
        @php
            function setLinkClass(...$pageNames){
                $routeName = Request::route()->getName();
                $contains = array_search( $routeName, $pageNames);
                
                return $contains !== false ? 'active' : '';
            }
        @endphp

        <nav class="bot-nav">
            <div>
                <img src=" {{ asset('images/dc-logo.png') }}" alt="dc-logo">
            </div>
            <ul>
                <li>
                    <a href="#"  href="#">Characters</a>
                    {{-- <a href="#" class=" {{ Request::route()->getName() == 'pagina-welcome' ? 'active' : '' }} "  href="{{ route('pagina-welcome') }}">Characters</a> --}}

                </li>
                <li>
                    {{-- nn funziona --}}
                    <a href="#" class="{{ setLinkClass('pagina-welcome' , 'Comic') }}"  href="{{ route('pagina-welcome') }}">Comics</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                    <span class="my-sort-down">
                        <i class=" fas fa-sort-down"></i>
                    </span>
                </li>
            </ul>
            <form action="">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </form>
        </nav>
    </div>
</header>