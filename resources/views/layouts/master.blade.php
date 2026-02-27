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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/plugins.js', 'resources/css/plugins.css', 'resources/css/style.css', 'resources/js/main.js'])
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
                            <img src="{{ asset('img/logo.png') }}" alt="Image" width="120">
                            <p>We champion integrated, community-led solutions to the interconnected crises of climate change, environmental degradation, and public health across the African continent.</p>
                            <!-- Footer Social -->
                            <div class="footer-social fix">
                                <a target="_blank" rel="noopener" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--  Footer Widget  -->
                    <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                        <h3>Latest News</h3>
                        <!--  Latest News Widget  -->
                        <div class="footer-news">
                            <a href="#" class="image float-start"><img src="{{ asset('img/blog/footer/1.jpg') }}" alt="Image"></a>
                            <div class="content fix">
                                <a href="#">Climate Action Plan Launched</a>
                                <p>New initiative to support rural health clinics.</p>
                            </div>
                        </div>
                        <div class="footer-news">
                            <a href="#" class="image float-start"><img src="{{ asset('img/blog/footer/2.jpg') }}" alt="Image"></a>
                            <div class="content fix">
                                <a href="#">Maternal Health Workshop</a>
                                <p>Training midwives on climate resilience.</p>
                            </div>
                        </div>
                    </div>
                    <!--  Footer Widget  -->
                    <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                        <h3>Project Gallery</h3>
                        <!--  Flickr Widget  -->
                        <ul class="flickr-gallery">
                            <li><a href="#"><img src="{{ asset('img/flickr/1.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/2.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/3.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/4.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/5.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/6.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/7.jpg') }}" alt="Image"></a></li>
                            <li><a href="#"><img src="{{ asset('img/flickr/2.jpg') }}" alt="Image"></a></li>
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
                    <p>Copyright &copy; {{ date('Y') }} ACHEA. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End -->
    </div>
</body>

<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
</html>
