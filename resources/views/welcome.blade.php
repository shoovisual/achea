@extends('layouts.master')
@section('content')
        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area section">
            <div class="hero-image-bg" style="background-image: url('{{ asset('img/hero/1.jpg') }}');">
                <div class="hero-caption">
                    <div class="container">
                        <div class="row">
                            <!-- Hero Content -->
                            <div class="hero-content col-12">
                                <h1 class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="0.5s">Building Africa’s Resilience <br>at the Nexus of Climate, Health, and Environment</h1>
                                <p class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1s">ACHEA champions integrated, community-led solutions to the interconnected crises of climate change, environmental degradation, and public health across Africa. We believe that climate, health, and the environment are inseparable—and lasting solutions must address them together.</p>
                                <a href="#" class="learn-more wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1.5s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Service Area Start -->
        <div id="service-area" class="service-area section pt-120 pb-120">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h1>1500+</h1>
                        <h2>People Working with Us</h2>
                        <p>Our work focuses on strengthening climate-resilient health systems, protecting ecosystems, and empowering communities, especially women and youth, to adapt and thrive in the face of climate change.</p>
                    </div>
                </div>
                <div class="row">
                    <!--  Single Service  -->
                    <div class="single-service text-center col-lg-4 col-md-6 col-12">
                        <img src="img/service/1.png" alt="Image">
                        <h4>Climate-Smart Maternal Clinics</h4>
                        <p>We support the development of climate-resilient health facilities through solar power, reliable water systems, and heat-adaptive infrastructure. These clinics ensure safe deliveries, vaccine storage, and uninterrupted maternal and neonatal care.</p>
                    </div>
                    <!--  Single Service  -->
                    <div class="single-service text-center col-lg-4 col-md-6 col-12">
                        <img src="img/service/2.png" alt="Image">
                        <h4>WASH for Safe Motherhood</h4>
                        <p>We improve access to clean water, sanitation, and hygiene in health facilities and communities. Our interventions include clean birth kits, community-managed water points, and improved sanitation facilities that promote safe childbirth and dignity for women.</p>
                    </div>
                    <!--  Single Service  -->
                    <div class="single-service text-center col-lg-4 col-md-6 col-12">
                        <img src="img/service/3.png" alt="Image">
                        <h4>Community Resilience Programs</h4>
                        <p>We empower communities through mother-led climate adaptation groups, early warning systems linked to maternal health alerts, and emergency preparedness plans for climate-related disasters.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->
        <!-- About Area Start -->
        <div id="about-area" class="about-area bg-dark section">
            <!--  About Image  -->
            <div class="about-image"><img src="img/about/about.jpg" alt="Image"></div>
            <div class="container">
                <div class="row">
                    <!--  About Content  -->
                    <div class="about-content col-lg-6 col-12 ms-auto pt-110 pb-110">
                        <h2>ABOUT US</h2>
                        <h1 style="font-size: 30px; line-height: 1.2;">African Climate, Health & Environmental Actions (ACHEA)</h1>
                        <p>ACHEA is a pan-African initiative working at the intersection of climate action, maternal and neonatal health, and environmental sustainability.</p>
                        <p>Our mission is to integrate climate-smart solutions into health systems while promoting planetary health and community resilience. We recognize that climate change exacerbates health risks, particularly for mothers and newborns, while environmental degradation undermines livelihoods and wellbeing.</p>
                        <p>ACHEA responds through innovation, collaboration, and community-led action—ensuring that Africa’s most vulnerable populations are not left behind.</p>
                        <a href="#" class="button white">JOIN NOW</a>
                        <a href="#" class="button">view details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        <!-- Project Area Start -->
        <div id="project-area" class="project-area section pt-120 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>RECENT PROJECT</h2>
                    </div>
                </div>
                <div class="row">
                    <!--  Single Project  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-project">
                            <!--  Image  -->
                            <img src="img/project/1.jpg" alt="Image">
                            <!--  Title  -->
                            <h4><a href="project-details.html">All the Lorem Ipsum Gener</a></h4>
                            <!--  Tags  -->
                            <div class="tags fix">
                                <a href="#">Energy</a>
                                <a href="#">Green</a>
                                <a href="#">Solar</a>
                            </div>
                            <!--  Content  -->
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making it over 2000 years old. Richard McClitock,</p>
                            <!--  Button  -->
                            <a class="button" href="project-details.html">Learn More</a>
                        </div>
                    </div>
                    <!--  Single Project  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-project">
                            <!--  Image  -->
                            <img src="img/project/2.jpg" alt="Image">
                            <!--  Title  -->
                            <h4><a href="project-details.html">It is a long established fact</a></h4>
                            <!--  Tags  -->
                            <div class="tags fix">
                                <a href="#">Energy</a>
                                <a href="#">Green</a>
                                <a href="#">Solar</a>
                            </div>
                            <!--  Content  -->
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making it over 2000 years old. Richard McClitock,</p>
                            <!--  Button  -->
                            <a class="button" href="project-details.html">Learn More</a>
                        </div>
                    </div>
                    <!--  Single Project  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-project">
                            <!--  Image  -->
                            <img src="img/project/3.jpg" alt="Image">
                            <!--  Title  -->
                            <h4><a href="project-details.html">All the Lorem Ipsum Gener</a></h4>
                            <!--  Tags  -->
                            <div class="tags fix">
                                <a href="#">Energy</a>
                                <a href="#">Green</a>
                                <a href="#">Solar</a>
                            </div>
                            <!--  Content  -->
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making it over 2000 years old. Richard McClitock,</p>
                            <!--  Button  -->
                            <a class="button" href="project-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Area End -->
        <!-- Donation Area Start -->
        <div id="donation-area" class="donation-area section pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--  Donation Section Title  -->
                        <div class="donation-title text-center fix">
                            <h3>NEED URGENT DONATION FOR</h3>
                            <h1>PROTECT & CARE OUR ENVIRONMENT</h1>
                        </div>
                        <!--  Donation Form  -->
                        <div class="donation-form">
                            <form action="#" id="donation-form">
                                <div class="input-box input-3"><input type="text" placeholder="YOUR NAME"></div>
                                <div class="input-box input-3"><input type="email" placeholder="EMAIL"></div>
                                <div class="input-box input-3">
                                    <select>
                                        <option value="1">SELECT PROJECT</option>
                                        <option value="2">PROJECT NUMBER 1</option>
                                        <option value="3">PROJECT NUMBER 2</option>
                                        <option value="4">PROJECT NUMBER 3</option>
                                        <option value="5">PROJECT NUMBER 4</option>
                                        <option value="6">PROJECT NUMBER 4</option>
                                    </select>
                                </div>
                                <div class="input-box input-3">
                                    <select>
                                        <option value="1">SELECT AMOUNT</option>
                                        <option value="2">$1000</option>
                                        <option value="3">$1500</option>
                                        <option value="4">$2000</option>
                                        <option value="5">$2500</option>
                                        <option value="6">$3000</option>
                                    </select>
                                </div>
                                <div class="input-box input-3"><input type="submit" value="donate now"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donation Area End -->
        <!-- Causes Area Start -->
        <div id="causes-area" class="causes-area bg-dark section pt-120 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title white text-center col-12 mb-80">
                        <h2>LATEST CAUSES</h2>
                    </div>
                </div>
                <div class="row">
                    <!--  Single Causes  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-causes-dark">
                            <div class="wrap">
                                <!--  Image  -->
                                <img src="img/causes/1.jpg" alt="Image">
                                <!--  Title  -->
                                <h4><a href="causes-details.html">All the Lorem Ipsum Gener</a></h4>
                                <!--  Country  -->
                                <span>Brazil</span>
                                <!--  Content  -->
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    Latin literature from</p>
                                <!--  Button  -->
                                <a class="button" href="#">donate</a>
                            </div>
                            <!--  Donation Amount  -->
                            <div class="donation-amount fix">
                                <p class="total float-start">Target: <span>$5000</span> </p>
                                <p class="raise float-end">Raised: <span>$2000</span> </p>
                            </div>
                        </div>
                    </div>
                    <!--  Single Causes  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-causes-dark">
                            <div class="wrap">
                                <!--  Image  -->
                                <img src="img/causes/2.jpg" alt="Image">
                                <!--  Title  -->
                                <h4><a href="causes-details.html">Contrary to popular belief</a></h4>
                                <!--  Country  -->
                                <span>Bangladesh</span>
                                <!--  Content  -->
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    Latin literature from</p>
                                <!--  Button  -->
                                <a class="button" href="#">donate</a>
                            </div>
                            <!--  Donation Amount  -->
                            <div class="donation-amount fix">
                                <p class="total float-start">Target: <span>$5000</span> </p>
                                <p class="raise float-end">Raised: <span>$2000</span> </p>
                            </div>
                        </div>
                    </div>
                    <!--  Single Causes  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-causes-dark">
                            <div class="wrap">
                                <!--  Image  -->
                                <img src="img/causes/3.jpg" alt="Image">
                                <!--  Title  -->
                                <h4><a href="causes-details.html">It is a long established fact</a></h4>
                                <!--  Country  -->
                                <span>Brazil</span>
                                <!--  Content  -->
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    Latin literature from</p>
                                <!--  Button  -->
                                <a class="button" href="#">donate</a>
                            </div>
                            <!--  Donation Amount  -->
                            <div class="donation-amount fix">
                                <p class="total float-start">Target: <span>$5000</span> </p>
                                <p class="raise float-end">Raised: <span>$2000</span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes Area End -->
        <!-- FunFact Area Start -->
        <div id="funfact-area" class="funfact-area section pt-120 pb-100">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>SOME FACTS</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                            literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="d-flex justify-content-center flex-wrap col-auto">
                        <!--  Single Fact  -->
                        <div class="single-fact">
                            <img src="img/funfact/1.png" alt="Image">
                            <span class="border"></span>
                            <h1><span class="counter">54514</span></h1>
                            <p>PROJECTS</p>
                        </div>
                        <!--  Single Fact  -->
                        <div class="single-fact">
                            <img src="img/funfact/2.png" alt="Image">
                            <span class="border"></span>
                            <h1>$<span class="counter">58785</span></h1>
                            <p>DONATIONS</p>
                        </div>
                        <!--  Single Fact  -->
                        <div class="single-fact">
                            <img src="img/funfact/3.png" alt="Image">
                            <span class="border"></span>
                            <h1>$<span class="counter">28785</span></h1>
                            <p>RAISED</p>
                        </div>
                        <!--  Single Fact  -->
                        <div class="single-fact">
                            <img src="img/funfact/4.png" alt="Image">
                            <span class="border"></span>
                            <h1><span class="counter">504</span></h1>
                            <p>DONATORS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FunFact Area End -->
        <!-- Video Area Start -->
        <div id="video-area" class="video-area section overlay pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <!--  Video Wrapper  -->
                    <div class="video-wrapper col-12 text-center">
                        <h1>WATCH OUR LATEST CAMPAIGN VIDEO</h1>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of clssical Latin
                            literature from 45 BC, making it over 2000 years old.</p>
                        <a class="video-popup" href="https://www.youtube.com/watch?v=mcixldqDIEQ"><i
                                class="zmdi zmdi-play-circle-outline"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        <!-- Event Gallery Area Start -->
        <div id="event-gallery-area" class="event-gallery-area section pt-120 pb-70">
            <div class="container">
                <div class="row">
                    <!--  Event Wrapper  -->
                    <div class="event-wrapper col-xl-5 col-lg-6 col-12 mb-50">
                        <!--  Block Title  -->
                        <h3 class="block-title">Latest Events</h3>
                        <!--  Single Event List  -->
                        <div class="event-list fix">
                            <div class="date float-start">
                                <h1>20</h1>
                                <h4>june</h4>
                            </div>
                            <div class="content fix">
                                <a href="causes-details.html">Cites of the word in class</a>
                                <p>There are many variations of passages of Lorem Ipsum available,</p>
                            </div>
                        </div>
                        <!--  Single Event List  -->
                        <div class="event-list fix">
                            <div class="date float-start">
                                <h1>23</h1>
                                <h4>june</h4>
                            </div>
                            <div class="content fix">
                                <a href="causes-details.html">long established fact that</a>
                                <p>There are many variations of passages of Lorem Ipsum available,</p>
                            </div>
                        </div>
                        <!--  Single Event List  -->
                        <div class="event-list fix">
                            <div class="date float-start">
                                <h1>25</h1>
                                <h4>june</h4>
                            </div>
                            <div class="content fix">
                                <a href="causes-details.html">Contrary to popular belief</a>
                                <p>There are many variations of passages of Lorem Ipsum available,</p>
                            </div>
                        </div>
                    </div>
                    <!--  Small Gallery Wrapper  -->
                    <div class="small-gallery-wrapper ms-auto col-lg-6 col-12 mb-40">
                        <!--  Block Title  -->
                        <h3 class="block-title">PHOTO GALLERY</h3>
                        <div class="row row-5">
                            <!--  Gallery Item  -->
                            <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                                <a href="img/gallery/big-1.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-1.jpg"
                                        alt="Image"></a>
                            </div>
                            <!--  Gallery Item  -->
                            <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                                <a href="img/gallery/big-2.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-2.jpg"
                                        alt="Image"></a>
                            </div>
                            <!--  Gallery Item  -->
                            <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                                <a href="img/gallery/big-3.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-3.jpg"
                                        alt="Image"></a>
                            </div>
                            <!--  Gallery Item  -->
                            <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                                <a href="img/gallery/big-4.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-4.jpg"
                                        alt="Image"></a>
                            </div>
                            <!--  Gallery Item  -->
                            <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                                <a href="img/gallery/big-5.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-5.jpg"
                                        alt="Image"></a>
                            </div>
                            <!--  Gallery Item  -->
                            <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                                <a href="img/gallery/big-6.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-6.jpg"
                                        alt="Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Gallery Area End -->
        <!-- Client Area Start -->
        <div id="client-area" class="client-area bg-dark section pt-115 pb-115">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title white text-center col-12 mb-80">
                        <h2>PARTNERS & COLLABORATION</h2>
                        <p>ACHEA believes that sustainable impact is achieved through strong partnerships. We collaborate with governments, development partners, health institutions, climate networks, and community organizations to scale integrated solutions.</p>
                        <p>Our partnership approach focuses on shared goals, local ownership, and evidence-based interventions that strengthen health systems, protect the environment, and improve lives across Africa.</p>
                    </div>
                </div>
                <!--  Client Slider  -->
                <div class="client-slider row">
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/1.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/2.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/3.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/4.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/5.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/1.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/2.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/3.png" alt="Image"></div>
                    <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/4.png" alt="Image"></div>
                    <!--  Client Item  --> <!--  Client Item  -->
                    <div class="client-item col-12"><img src="img/clients/5.png" alt="Image"></div>
                </div>
            </div>
        </div>
        <!-- Client Area End -->
        <!-- Blog Area Start -->
        <div id="blog-area" class="blog-area section pt-120 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>LATEST NEWS</h2>
                    </div>
                </div>
                <div class="row">
                    <!--  Blog Item  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="blog-item">
                            <!--  Image  -->
                            <a href="blog-details.html" class="image"><img src="img/blog/1.jpg" alt="Image"></a>
                            <!--  Content  -->
                            <div class="content">
                                <h4><a href="blog-details.html">All the Lorem Ipsum Gener</a></h4>
                                <!--  Meta  -->
                                <div class="meta fix">
                                    <span>28 January 2022</span>
                                    <span><a href="#">3 Comment</a></span>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    Latin literature from</p>
                                <a href="blog-details.html" class="read-more">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <!--  Blog Item  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="blog-item">
                            <!--  Image  -->
                            <a href="blog-details.html" class="image"><img src="img/blog/2.jpg" alt="Image"></a>
                            <!--  Content  -->
                            <div class="content">
                                <h4><a href="blog-details.html">Finibus Bonorum et Malorum</a></h4>
                                <!--  Meta  -->
                                <div class="meta fix">
                                    <span>28 January 2022</span>
                                    <span><a href="#">3 Comment</a></span>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    Latin literature from</p>
                                <a href="blog-details.html" class="read-more">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <!--  Blog Item  -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="blog-item">
                            <!--  Image  -->
                            <a href="blog-details.html" class="image"><img src="img/blog/3.jpg" alt="Image"></a>
                            <!--  Content  -->
                            <div class="content">
                                <h4><a href="blog-details.html">The standard Lorem Ipsuma</a></h4>
                                <!--  Meta  -->
                                <div class="meta fix">
                                    <span>28 January 2022</span>
                                    <span><a href="#">3 Comment</a></span>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                    Latin literature from</p>
                                <a href="blog-details.html" class="read-more">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
@endsection
