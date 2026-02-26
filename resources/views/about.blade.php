@extends('layouts.master')

@section('title', 'About Us')

@section('content')

<div class="page-banner-area section overlay gradient" style="background-image: url('{{ asset('img/hero/1.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="page-banner col-12">
                <h2>ABOUT US</h2>
                <ul class="p-0 text-white">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="#">about</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!--  About Image  -->
            <div class="about-image-2 col-lg-5 col-12"><img src="{{ asset('img/about/about-2.jpg') }}" alt=""></div>
            <!--  About Content  -->
            <div class="col-lg-7 col-12">
                <h2>Who We Are</h2>
                <div>
                    <h2 class="fw-bold">The African Climate Health & Environmental Alliance (ACHEA)</h2>
                </div>
                <p> is a non-profit organization dedicated to building climate-resilient health systems across Africa. We operate at the intersection of climate change and public health, recognizing that a warming planet poses fundamental threats to human well-being—from vector-borne diseases to food insecurity and heat stress.</p>
                <p>Our mission is to empower communities, health professionals, and policymakers with the tools, knowledge, and infrastructure needed to adapt to a changing climate. By integrating climate-smart solutions into health systems, we aim to safeguard the most vulnerable populations, particularly women and children, from environmental health risks.</p>
                <div class="btns text-white">
                    <a href="#" class="button black">JOIN NOW</a>
                    <a href="#" class="button">view details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Service Area Start -->
<div id="service-area" class="service-area section pb-120">
    <div class="container">
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <h2>Our Core Programs</h2>
            </div>
        </div>
        <div class="row">
            <!--  Single Service  -->
            <div class="single-service text-center col-lg-4 col-md-6 col-12">
                <img src="{{ asset('img/service/1.png') }}" alt="">
                <h4>Climate-Smart Maternal Clinics</h4>
                <p>We retrofit rural health facilities with solar power, rainwater harvesting, and sustainable waste management to ensure continuous care for mothers and newborns, even during extreme weather events.</p>
            </div>
            <!--  Single Service  -->
            <div class="single-service text-center col-lg-4 col-md-6 col-12">
                <img src="{{ asset('img/service/2.png') }}" alt="">
                <h4>WASH for Safe Motherhood</h4>
                <p>We implement water, sanitation, and hygiene (WASH) infrastructure in healthcare centers to prevent infections and reduce maternal and neonatal mortality.</p>
            </div>
            <!--  Single Service  -->
            <div class="single-service text-center col-lg-4 col-md-6 col-12">
                <img src="{{ asset('img/service/3.png') }}" alt="">
                <h4>Community Resilience & Advocacy</h4>
                <p>We train community health workers on climate-health risks and advocate for policies that prioritize environmental health at the national and regional levels.</p>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End -->

<!-- Volunteer Area Start -->
<div id="volunteer-area" class="volunteer-area section pt-120 pb-70">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title white text-center col-12 mb-80">
                <h2>PARTNERS & COLLABORATION</h2>
                <p style="color: #fff;">ACHEA believes that sustainable impact is achieved through strong partnerships. We collaborate with governments, development partners, health institutions, climate networks, and community organizations to scale integrated solutions.</p>
                <p style="color: #fff;">Our partnership approach focuses on shared goals, local ownership, and evidence-based interventions that strengthen health systems, protect the environment, and improve lives across Africa.</p>
            </div>
        </div>
    </div>
</div>
<!-- Volunteer Area End -->

@include('components.facts')
{{--
<!-- Testimonial Area Start -->
<div id="testimonial-area" class="testimonial-area section overlay pt-120 pb-100">
    <div class="container">
        <!-- Testimonial Slider -->
        <div class="testimonial-slider slick-space">
            <div class="slick-slide">
                <!-- Single Testimonial -->
                <div class="single-testimonial">
                    <div class="content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected humour bojte tomi.</p>
                    </div>
                    <div class="author fix">
                        <img src="{{ asset('img/testimonial/1.jpg') }}" alt="">
                        <div class="details fix">
                            <h4>Jack Cox</h4>
                            <span>Bangladesh</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slide">
                <!-- Single Testimonial -->
                <div class="single-testimonial">
                    <div class="content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected humour bojte tomi.</p>
                    </div>
                    <div class="author fix">
                        <img src="{{ asset('img/testimonial/2.jpg') }}" alt="">
                        <div class="details fix">
                            <h4>Jose Miller</h4>
                            <span>Bangladesh</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slide">
                <!-- Single Testimonial -->
                <div class="single-testimonial">
                    <div class="content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected humour bojte tomi.</p>
                    </div>
                    <div class="author fix">
                        <img src="{{ asset('img/testimonial/3.jpg') }}" alt="">
                        <div class="details fix">
                            <h4>John Pena</h4>
                            <span>Bangladesh</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->

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
                    <a href="blog-details.html" class="image"><img src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
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
                    <a href="blog-details.html" class="image"><img src="{{ asset('img/blog/2.jpg') }}" alt=""></a>
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
                    <a href="blog-details.html" class="image"><img src="{{ asset('img/blog/3.jpg') }}" alt=""></a>
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
--}}

@endsection
