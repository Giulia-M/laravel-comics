<footer>
    
    @section('font_scrittura', "https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap")


    @section('font-family-footer', "https://fonts.googleapis.com/css2?family=Cardo&display=swap")

    {{-- top --}}
    <div class="footer-bg-img">
    
        <div class="footer-top">
            
            <div class="d-flex">
                {{-- ROW colonna sinistra COL 6 --}}
                <div class="col-6 padding">
                    <div class="row">
                        <div class="col-3">
                            <h3>Dc Comics</h3>

                            <ul>
                                <li>
                                    <a href="#">Characters</a>
                                </li>
                                <li>
                                    <a href="#">Comics</a>
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
                                    <a href="#">Videos</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                            </ul>

                            <h3 class="margin">Shop</h3>

                            <ul>
                                <li>
                                    <a href="#">Shop Dc</a>
                                </li>

                                <li>
                                    <a href="#">Shop DC Collectibles</a>
                                </li>
                            </ul>

                        </div>


                        <div class="col-3">
                            <h3>Dc</h3>

                            <ul>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="">Privacy Policy (New)</a>
                                </li>
                                <li>
                                    <a href="#">Add Choices</a>
                                </li>
                                <li>
                                    <a href="#">Advertising</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Subscriptions</a>
                                </li>
                                <li>
                                    <a href="#">Talent Workshops</a>
                                </li>

                                <li>
                                    <a href="#">CPSC Certificates</a>
                                </li>

                                <li>
                                    <a href="#">Ratings</a>
                                </li>

                                <li>
                                    <a href="#">Shop Help</a>
                                </li>

                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-6">

                            <h3>Sites</h3>

                            <ul>
                                <li>
                                    <a href="#">DC</a>
                                </li>
                                <li>
                                    <a href="#">MAD Magazine</a>
                                </li>
                                <li>
                                    <a href="#">DC Kids</a>
                                </li>
                                <li>
                                    <a href="#">DC Universe</a>
                                </li>
                                <li>
                                    <a href="#">DC Power Visa</a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                </div>

                {{-- colonna DESTRA col 6 --}}
                <div class="col-6 wrap-dc-logo-bg">
                    <img src="{{ asset ('images/dc-logo-bg.png')}}" alt="logo">
                </div>
            </div>

            <div class="cookies">
                <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <span><a href="#">noted here.</a> </span> All rights reserved.</p>
                <p><span><a href="#">Cookies Settings.</a></span></p>
            </div>

        

        </div>

    </div>

    {{-- footer bottom --}}
    <div class="footer-bott">

        <div class="container">
            <button>
                <a href="#">
                    Sign-Up Now!
                </a>
            </button>

            <div class="d-flex">
                <h2>Follow Us</h2>

                <div class="d-flex">
                    <img src="{{ asset ('images/footer-facebook.png')}}" alt="facebook logo">
                    <img src="{{ asset ('images/footer-twitter.png')}}" alt="twitter">
                    <img src="{{ asset ('images/footer-youtube.png')}}" alt="youtube">
                    <img src="{{ asset ('images/footer-pinterest.png')}}" alt="pinterest">
                    <img src="{{ asset ('images/footer-periscope.png')}}" alt="periscope">

                </div>
            </div>
        </div>
    
    </div>
</footer>

