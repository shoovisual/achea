<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css', 'resources/js/main.js'])
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper fix">
        @include('layouts.components.navbar')
        @yield('content')
        <!-- Footer Area Start -->
        <!-- Footer Top Area Start -->
        <div id="footer-top-area" class="footer-top-area bg-dark section pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <!--  Footer Widget  -->
                    <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                        <!--  About Widget  -->
                        <div class="about-widget">
                            <img src="img/logo-2.png" alt="Image">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                literature from</p>
                            <!-- Footer Social -->
                            <div class="footer-social fix">
                                <a target="_blank" rel="noopener" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="contact.html" class="button">Donate now</a>
                        </div>
                    </div>
                    <!--  Footer Widget  -->
                    <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                        <h3>Latest News</h3>
                        <!--  Latest News Widget  -->
                        <div class="footer-news">
                            <a href="blog-details.html" class="image float-start"><img src="img/blog/footer/1.jpg" alt="Image"></a>
                            <div class="content fix">
                                <a href="blog-details.html">Finibus Bonorum Malorum</a>
                                <p>Contrary to popular belief, Lorm Ipsum is not simply random</p>
                            </div>
                        </div>
                        <div class="footer-news">
                            <a href="blog-details.html" class="image float-start"><img src="img/blog/footer/2.jpg" alt="Image"></a>
                            <div class="content fix">
                                <a href="blog-details.html">The Standard lorem ipsum</a>
                                <p>Contrary to popular belief, Lorm Ipsum is not simply random</p>
                            </div>
                        </div>
                    </div>
                    <!--  Footer Widget  -->
                    <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                        <h3>Flickr Photos</h3>
                        <!--  Flickr Widget  -->
                        <ul class="flickr-gallery">
                            <li><a href="gallery.html"><img src="img/flickr/1.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/2.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/3.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/4.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/5.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/6.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/7.jpg" alt="Image"></a></li>
                            <li><a href="gallery.html"><img src="img/flickr/2.jpg" alt="Image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Area End -->
        <!-- Footer Bottom Area Start -->
        <div id="footer-bottom-area" class="footer-bottom-area section">
            <!-- Footer Top Area End -->
            <div class="container">
                <!-- Copyright -->
                <div class="copyright text-center">
                    <p>Copyright &copy; {{ date('Y') }} ACHEA. Developed by <i class="fa fa-heart heart-icon"></i> By <a target="_blank"
                            href="https://shoovisual.com/">Shoovisual</a></p>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End -->
    </div>
</body>
</html>
