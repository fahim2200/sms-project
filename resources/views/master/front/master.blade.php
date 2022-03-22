<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('/') }}css/all.css">
        <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
        <style>
            body{
                background-color: #545b62;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow sticky-top">
            <div class="container">
                <a href="" class="navbar-brand">M SMS</a>
                <ul class="navbar-nav">
                    <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">All Course</a></li>

                    @if(Session::get('student_id'))
                        <a href="{{route('user-login')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{Session::get('student_name')}}
                        </a>
                    <ul>
                        <li>
                            <a href="" class="dropdown-item">Log Out</a>
                        </li>
                    </ul>
                    @else
                    <li><a href="{{ route('user-login') }}" class="nav-link">Login</a></li>
                    <li><a href="{{ route('user-resister') }}" class="nav-link">Registration</a></li>
                    @endif
                </ul>
            </div>
        </nav>

        @yield('body')

        <footer class="pt-5 pb-4 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-body rounded-0 bg-transparent text-light border-0">
                            <h3>About Institute</h3>
                            <hr/>
                            <p>To address the skill gap of HR in the industry, BASIS started its own training activities in 2007. Later in 2012, BASIS institutionalized its training activities and set up BASIS Institute of Technology & Management (BITM) with the support of World Bank.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card-body rounded-0 bg-transparent text-light border-0">
                            <h3>Popular Link</h3>
                            <hr/>
                             <ul>
                                 <li><a href="">Link one</a></li>
                                 <li><a href="">Link two</a></li>
                                 <li><a href="">Link three</a></li>
                                 <li><a href="">Link four</a></li>
                             </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card-body rounded-0 bg-transparent text-light border-0">
                            <h3>Follow Us On</h3>
                            <hr/>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="bg-white mt-5"/>
                <div class="row">
                    <div class="col-12">
                        <p class="text-white text-center mb-0">Copyright@2022, All right reserved by Mahbubur Rahman</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('/') }}js/jquery-3.6.0.js"></script>
        <script src="{{ asset('/') }}js/bootstrap.js"></script>
    </body>
</html>
