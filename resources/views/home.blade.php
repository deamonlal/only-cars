@extends('layouts.app')

@section('content')
<div class="container">
    
    
    <!-- Site Description -->
        <div class="presentation container">
            <h2>We are <span class="violet">Andia</span>, a super cool design agency.</h2>
            <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
        </div>

        <!-- Latest Work -->
        <div class="portfolio container">
            <div class="portfolio-title">
                <h3>Our Latest Work</h3>
            </div>
            <div class="column">
                <div class="work span10">
                    <div class="span__row">
                        <img src="/images/logo.png" alt="">
                        <div class="row__info">
                            <h4>Dolor Prints</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        </div>
                    </div>
                </div>
                <div class="work span12">
                    <div class="span__row">
                        <img src="/images/logo.png" alt="">
                        <div class="row__info">
                            <h4>Dolor Prints</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        </div>
                    </div>
                </div>
                <div class="work span12">
                    <div class="span__row">
                        <img src="/images/logo.png" alt="">
                        <div class="row__info">
                            <h4>Dolor Prints</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        </div>
                    </div>
                </div>
                <div class="work span12">
                    <div class="span__row">
                        <img src="/images/logo.png" alt="">
                        <div class="row__info">
                            <h4>Dolor Prints</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="widget span3">
                        <h4>Latest Tweets</h4>
                        <div class="show-tweets"></div>
                    </div>
                    <div class="widget span3">
                        <h4>Contact Us</h4>
                        <p> Saint-Petersberg</p>
                        <p> Phone: +7 999 12 34 567</p>
                        <p> Email: <a href="">somebeautiful@gmail.com</a></p>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="social span8">
                        <a class="facebook" href=""></a>
                        <a class="dribbble" href=""></a>
                        <a class="twitter" href=""></a>
                        <a class="pinterest" href=""></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>
    
    
<!--    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>-->
</div>
@endsection