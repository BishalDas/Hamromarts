<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!------Ends Here------>
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Hamro Mart</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!--fff--->
    <style>
        /*a { color: #FF0000; } *//* CSS link color */
        .link { color: blue; } /* CSS link color (red) */
        .link:hover { color: red; }
        ul li:hover{
            color: blue;
        }
    </style>
</head>
<body>
<div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Type any keywords...">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-between">
                <!-- Breaking News -->
                <div class="col-12 col-sm-6">
                    <div class="breaking-news">
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Hello|</a></li>
                                <li><a href="#">Welcome to Hamro Mart</a></li>
                                <li><a href="#">Explore your Product</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Top Social Info -->
                <div class="col-12 col-sm-6">
                    <div class="top-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="delicious-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="deliciousNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html" style="width: 82px; height: 72px;"><img src="frontend/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog-post.html">Blog Post</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="elements.html">Join with us</a></li>
                                        <li><a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="frontend/receipe-post.html">More Search</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('login')}}" class="fa fa-user">Join with us</a></li>
                            </ul>

                            <!-- Newsletter Form -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-3">
            <img src="{{URL::to('frontend/img/electronics.jpg')}}">
        <!-- <img src="{{URL::to('frontend/img/electronics.jpg')}}"> -->
        </div>
        <div class="col-md-9 bg-white">
            <div class="row bg-light mb-2">
                <span>Home ></span><span>Industrial Plans, Machinery and Equipment</span>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Industrial Plans and Machinery</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul class="a">
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div><hr>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul class="a">
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul class="a">
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <p class="text-primary">Machines & Equipments</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{URL::to('frontend/img/oven.jpg')}}" height="100%" width="100%" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Industrial Machinery</li>
                                    <li>SPM Machine</li>
                                    <li>Paper Cup Making Machine</li>
                                    <li>Rolling Machine</li>
                                    <li>Industrial Machiney Parts</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
