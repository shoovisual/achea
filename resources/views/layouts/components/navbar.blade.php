
        <!-- Header Area Start -->
        <div id="header-area" class="header-area section">
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <!-- Header Top Left -->
                        <div class="header-top-left col-md-auto col-12">
                            <p><span>Phone:</span> +945 588 9966</p>
                            <p><span>Email:</span> greensoul@email.com</p>
                        </div>
                        <!-- Header Top Right -->
                        <div class="header-top-right col-md-auto col-12 d-none d-md-flex">
                            <!-- Header Social -->
                            <div class="header-social d-md-none d-lg-flex">
                                <a target="_blank" rel="noopener" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" rel="noopener" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            </div>
                            <!-- Header Quote Button -->
                            <a href="{{ route('contact') }}" class="get-quote">get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="header-logo col align-self-center">
                            <a class="logo" href="{{ route('home') }}">
                                <img src="{{ asset('img/logo.png') }}" alt="Image">
                            </a>
                        </div>
                        <!-- Main Menu -->
                        <div id="main-menu" class="main-menu col-auto d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}">HOME</a></li>
                                    <li><a href="{{ route('about') }}">ABOUT US</a></li>
                                    <li><a href="#">PROGRAM</a></li>
                                    <li><a href="#">PROJECTS</a></li>
                                    <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="mobile-menu col-12 d-lg-none"></div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom End -->
        </div>
        <!-- Header Area End -->
