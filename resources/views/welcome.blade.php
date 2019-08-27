<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <style>
             nav.font{
                font-size: 18px;
                font-weight: 700;
             }
             nav{
                background-color: #254E58;
                //opacity: 0.5;
             }
             .lead{
                font-weight: 700;
                font-size: 20px;
             }
             .featurette{
                font-weight: 700;
                color: #254E58;
             }
             .home{
                  background-image: linear-gradient(to right, rgba(136,189,188, 0.2), rgba(136,189,188, 0.5), rgba(136,189,188, 1)), url(./img/write.jpg);
                  height: 50%;
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                  position: relative;
             }

             .hero-text{
                padding-top: 15%;
                padding-bottom: 15.2%;
                align-content: center;
                text-align: center;
                color: #fff;

             }
         </style>
    </head>
    <body>
        <div>
            <header>
                <nav class="navbar navbar-expand-md fixed-top font">
                    <a class="navbar-brand text-light" href="#">My Assignments Experts</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-light" href="#">How it Works <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="#">About Us</a>
                        </li>
                      </ul>
                      <div class="mt-2 mt-md-0">
                          @if (Route::has('login'))
                              <div class="mr-sm-2">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        @auth
                                            <a class="nav-link text-light" href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                                    </li class="nav-item">
                                    <li>
                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </li>
                                </ul>  
                              </div>
                          @endif
                      </div>
                    </div>
                  </nav>
            </header>
            <!---------------- banner section ----------------------> 

            <div class="home">
                <div class="hero-text">
                    <h1 class="font-weight-bold pt-4"> We Will Help You Do Your Assignments</h1>
                    <h4>From initial topic to finished paper</h4>
                    <a href="" class="btn btn-lg btn-success mt-5">Make An Order</a>
                </div>
            </div>

            <div class="row p-5">
              <div class="col-md-8 pt-5">
                <h2 class="display-4 featurette">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-4 p-3">
                <img src="./img/small.jpg" alt="">
              </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
