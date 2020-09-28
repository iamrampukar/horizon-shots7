<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Document Settings -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Page Title -->
        <title>HorizonShots</title>
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.jpg') }}" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{asset('css/responsive.css') }}"/>
        <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--// Pre-Loader -->
        <div id="preloader">
            <div id="preloader-center">
                <div id="preloader-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--//site-nav//-->
        <aside class="site-nav">
            <div class="off-canvas-inner">
                <!--//Header//-->
                <header class="header">
                    <h2 class="text-uppercase widget-title pull-left">Navigation</h2>
                    <button type="button" class="close-btn pull-right"><i class="icon fa fa-close"></i></button>
                </header>
                <!--//End Header-->
                <!--//Menu//-->
                <div class="widget menu">
                    <div class="widget-menu text-uppercase">
                        <ul id="menu">
                            <li><a href="index.html" class="active">Home</a></li>

                            <li><a href="#">Gallery</a></li>
                            <li><a href="contact.html">Contact me</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="about-me.html">about me</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </div>
                </div>
                <!--//End Menu-->
                <!--//Categories//-->
                <div class="widget categories">
                    <h3 class="widget-title text-uppercase">Categories</h3>
                    <ul class="widget-menu st-category-menu text-uppercase">
                        <li>
                            <a href="category.html">Adventure <span class="pull-right">12</span></a>
                        </li>
                        <li>
                            <a href="category.html">Art <span class="pull-right">17</span></a>
                        </li>
                        <li>
                            <a href="category.html">Nature <span class="pull-right">45</span></a>
                        </li>
                        <li>
                            <a href="category.html">Photo <span class="pull-right">30</span></a>
                        </li>
                        <li>
                            <a href="category.html">Travel <span class="pull-right">47</span></a>
                        </li>
                    </ul>
                </div>
                <!--//End Categories-->
                <!--//Follow @ Instagram//-->
                <div class="widget instragrams fix">
                    <h3 class="widget-title text-uppercase">Follow @ Instagram</h3>
                    <ul class="widget-instagram text-uppercase">
                        <li>
                            <a href="#"><img src="{{ asset('images/st-1.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-2.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-3.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-4.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-5.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-6.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-7.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/sti-8.jpg') }}" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('images/st-9.jpg') }}" alt="" /></a>
                        </li>
                    </ul>
                </div>
                <!--//Follow @ Instagram-->
                <!--//Recent Posts//-->
                <div class="widget">
                    <h3 class="widget-title text-uppercase">Recent Posts</h3>
                    <div class="recent-post">
                        <div class="single-recent-post">
                            <h3 class="text-uppercase"><a href="single-blog.html">Top 10 Bold Ocean Journey </a></h3>
                            <p class="recent-post-date">
                                August 02, 2016
                            </p>
                        </div>
                        <div class="single-recent-post">
                            <h3 class="text-uppercase"><a href="single-blog.html">Great Travelling Tips </a></h3>
                            <p class="recent-post-date">
                                August 02, 2016
                            </p>
                        </div>
                        <div class="single-recent-post">
                            <h3 class="text-uppercase"><a href="single-blog.html">Why We need Life Jacket? </a></h3>
                            <p class="recent-post-date">
                                August 02, 2016
                            </p>
                        </div>
                        <div class="single-recent-post">
                            <h3 class="text-uppercase"><a href="single-blog.html">Best Tourist Places</a></h3>
                            <p class="recent-post-date">
                                August 02, 2016
                            </p>
                        </div>
                    </div>
                </div>
                <!--//subscribe//-->
                <div class="widget">
                    <h3 class="widget-title text-uppercase">Our Newsletter</h3>
                    <form class="st-subscribe st-search">
                        <i class="fa fa-envelope-o"></i>
                        <input type="email" placeholder="Email Address" />
                    </form>
                </div>
                <!--//subscribe-->
                <!--//Search//-->
                <!--//End Search-->
                <div class="widget scroll-top">
                    <a class="st-top" href="#top"> Back to Top</a>
                </div>
            </div>
        </aside>
        <!--//home//-->
        <div class="st-home" id="home">
            <nav class="top-nav">
                <div class="logo pull-left">
                    <h1>
                        <a href="index.html"><img src="{{ asset('images/logo_v1.png') }}" alt="stamina" /></a>
                    </h1>
                </div>
                <button type="button" class="navbar-toggle show-btn"><i class="fa fa-navicon"></i></button>
            </nav>
            <div class="mask"></div>
            <div class="st-canvas">
                <div class="st-content-wrap">
                    <!--//Content Area//-->
                    <div id="home-carousel" class="carousel slide st-content-wrap" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-home-area section-home-area img-1">
                                    <div class="container">
                                        <div class="home-content text-center">
                                            <h4 class="post-date">August 01, 2016 | Traveller | <a href="#">Travel</a></h4>
                                            <h2 class="text-uppercase blog-heading"><a href="single-blog.html">Trek to Langtang</a></h2>
                                            <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-home-area section-home-area">
                                    <video autoplay muted loop id="bgvid">
                                        <source src="{{ asset('videos/video.mp4') }}" type="video/mp4" />
                                    </video>
                                    <!-- <button id="vidpause">Pause</button>-->
                                    <div class="container">
                                        <div class="home-content text-center">
                                            <h4 class="post-date">August 01, 2016 | J. Khalil | <a href="#">Travel</a></h4>
                                            <h2 class="text-uppercase blog-heading"><a href="single-blog.html">Take a Virtual Submarine Dive</a></h2>
                                            <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-home-area section-home-area img-2">
                                    <div class="container">
                                        <div class="home-content text-center">
                                            <h4 class="post-date">August 01, 2016 | J. Khalil | <a href="#">Travel</a></h4>
                                            <h2 class="text-uppercase blog-heading"><a href="single-blog.html">Retracing the Oskar Journey</a></h2>
                                            <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Left and right controls -->
                        <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--//Blog area//-->
        <div class="blog-area">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-sm-12 fix">
                        <div class="single-blog-post single-home-area post-3 fix text-center">
                            <div class="post-overlay text-center">
                                <h4 class="post-date">May 24, 2016 | John Doe | <a href="#">Travel</a></h4>
                                <h2 class="text-uppercase blog-heading">A Journey to Long Beach Island</h2>
                                <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                            </div>
                            <div class="hover-icon fix">
                                <a href="#"><i class="fa fa-heart"></i><span>3</span></a>
                                <a href="#"><i class="fa fa-comment"></i><span>4</span></a>
                            </div>
                            <a class="post-link" href="single-blog.html"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="video_container" class="single-blog-post post-2 fix text-center">
                            <video autoplay="autoplay" loop="loop" id="bgvid-2">
                                <source src="{{ asset('videos/video-post.mp4')}}" type="video/mp4" />
                            </video>
                            <div class="post-overlay text-center">
                                <h4 class="post-date">July 12, 2016 | John Doe | Travel</h4>

                                <h2 class="text-uppercase blog-heading">Making nice to hill</h2>

                                <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                            </div>
                            <div class="hover-icon fix">
                                <a href="#"><i class="fa fa-heart-o"></i><span>3</span></a>
                                <a href="#"><i class="fa fa-comment"></i><span>4</span></a>
                            </div>
                            <a class="post-link" href="single-blog.html"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-post post-2 fix text-center">
                            <img src="{{ asset('images/post-5.jpg') }}" alt="" />
                            <div class="post-overlay text-center">
                                <h4 class="post-date">August 24, 2016 | John Doe | Travel</h4>

                                <h2 class="text-uppercase blog-heading">The Bold trip to Australia</h2>

                                <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                            </div>
                            <div class="hover-icon fix">
                                <a href="#"><i class="fa fa-heart-o"></i><span>3</span></a>
                                <a href="#"><i class="fa fa-comment"></i><span>4</span></a>
                            </div>
                            <a class="post-link" href="single-blog.html"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-post post-2 fix text-center">
                            <img src="{{ asset('images/post-9.jpg') }}" alt="" />
                            <div class="post-overlay text-center">
                                <h4 class="post-date">August 24, 2016 | John Doe | Travel</h4>

                                <h2 class="text-uppercase blog-heading">The Bold trip to Australia</h2>

                                <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                            </div>
                            <div class="hover-icon fix">
                                <a href="#"><i class="fa fa-heart-o"></i><span>3</span></a>
                                <a href="#"><i class="fa fa-comment"></i><span>4</span></a>
                            </div>
                            <a class="post-link" href="single-blog.html"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-blog-post post-2 fix text-center">
                            <img src="{{ asset('images/post-2.jpg') }}" alt="" />
                            <div class="post-overlay text-center">
                                <h4 class="post-date">August 24, 2016 | John Doe | Travel</h4>

                                <h2 class="text-uppercase blog-heading">Gutter Passion in the hill</h2>

                                <a href="single-blog.html" class="read-more text-uppercase">+Read the Story</a>
                            </div>
                            <div class="hover-icon fix">
                                <a href="#"><i class="fa fa-heart-o"></i><span>3</span></a>
                                <a href="#"><i class="fa fa-comment"></i><span>4</span></a>
                            </div>
                            <a class="post-link" href="single-blog.html"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//Footer instragram//-->
        <div>
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-sm-12 fix">
                        <div class="instragram-heading text-center text-uppercase">
                            <h2>Follow @Instagram</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-instra">
                                    <a href="#"> <img src="{{ asset('images/insta-1.jpg') }}" alt="" /> <span class="insta-overlay"></span></a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-instra">
                                    <a href="#"> <img src="{{ asset('images/insta-2.jpg') }}" alt="" /> <span class="insta-overlay"></span></a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-instra">
                                    <a href="#"> <img src="{{ asset('images/insta-3.jpg') }}" alt="" /> <span class="insta-overlay"></span></a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-instra">
                                    <a href="#"> <img src="{{ asset('images/insta-4.jpg') }}" alt="" /> <span class="insta-overlay"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//Footer top//-->
        <div class="footer-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class="footer-about text-center">
                            <div class="footer-about-content">
                                <a href="#"><img src="{{ asset('images/logo_v1.png') }}" alt="" /></a>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos eaccusam et justo duo dolores et ea
                                    rebum. Stet clita kasd gubergren, no sea.
                                </p>
                            </div>
                            <div class="footer-social">
                                <h3 class="text-uppercase">Connected with us</h3>
                                <ul>
                                    <li>
                                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Google plus"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Youtube"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Git"><i class="fa fa-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//Footer bottom//-->
        <footer>
            <div class="container">
                <a class="scroll-top pull-right" href="#home"> Back to Top</a>
            </div>
        </footer>
        <!--//Script//-->
        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
