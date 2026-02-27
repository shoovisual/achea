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
<div id="about-area" class="about-area section py-30" style="background: linear-gradient(to right, #f9f9f9, #ffffff);">
    <div class="container">
        <div class="row align-items-start">
            <!--  About Image  -->
            <div class="col-lg-6 col-12 mb-30">
                <div class="about-image-2" style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    <img src="{{ asset('img/about/solar-environmental.png') }}" alt="ACHEA Team" style="width: 100%; height: auto; display: block; transition: transform 0.5s ease;">
                </div>
            </div>
            <!--  About Content  -->
            <div class="col-lg-6 col-12 mb-30">
                <div class="about-content-2" style="padding-left: 30px;">
                    <span style="display: block; color: #ff9f6f; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px;">Who We Are</span>
                    <h2 style="font-size: 36px; font-weight: 800; line-height: 1.3; margin-bottom: 25px; color: #333;">The African Climate Health & <br><span style="color: #ff9f6f;">Environmental Alliance</span></h2>
                    
                    <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 20px;">
                        ACHEA is a non-profit organization dedicated to building climate-resilient health systems across Africa. We operate at the intersection of climate change and public health, recognizing that a warming planet poses fundamental threats to human well-being—from vector-borne diseases to food insecurity and heat stress.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 35px;">
                        Our mission is to empower communities, health professionals, and policymakers with the tools, knowledge, and infrastructure needed to adapt to a changing climate. By integrating climate-smart solutions into health systems, we aim to safeguard the most vulnerable populations, particularly women and children.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Mission & Vision Area Start -->
<div id="mission-vision-area" class="mission-vision-area section py-30" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <!-- Mission -->
            <div class="col-lg-6 col-12 mb-40">
                <div class="mission-vision-item card py-4 px-8">
                    <div class="icon" style="font-size: 40px; color: #ff9f6f; margin-bottom: 20px;">
                        <i class="fa fa-bullseye"></i>
                    </div>
                    <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 15px; color: #333;">Our Mission</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #666;">
                        To build climate-resilient health systems across Africa by empowering communities, health professionals, and policymakers with the tools, knowledge, and infrastructure needed to adapt to a changing climate.
                    </p>
                </div>
            </div>
            <!-- Vision -->
            <div class="col-lg-6 col-12 mb-40">
                <div class="mission-vision-item card py-4 px-8">
                    <div class="icon" style="font-size: 40px; color: #ff9f6f; margin-bottom: 20px;">
                        <i class="fa fa-eye"></i>
                    </div>
                    <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 15px; color: #333;">Our Vision</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #666;">
                        An Africa where sustainable development and environmental stewardship ensure that every community thrives in a healthy, climate-resilient future, free from the threats of environmental degradation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission & Vision Area End -->

<!-- Service Area Start -->
<div id="service-area" class="service-area section pb-90 pt-100">
    <div class="container">
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <span style="display: block; color: #ff9f6f; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px;">What We Do</span>
                <h2 style="font-size: 42px; font-weight: 800; color: #333;">Our Core Programs</h2>
                <p style="max-width: 700px; margin: 20px auto 0; color: #666;">We implement targeted interventions to address the most critical intersectional challenges.</p>
            </div>
        </div>
        <div class="row">
            <!--  Single Service  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-service text-center" style="background: #fff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; height: 100%; border-bottom: 3px solid transparent;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 25px; display: flex; align-items: center; justify-content: center; background: rgba(255, 159, 111, 0.1); border-radius: 50%;">
                        <img src="{{ asset('img/service/1.png') }}" alt="" style="max-width: 40px;">
                    </div>
                    <h4 style="font-weight: 700; font-size: 20px; margin-bottom: 15px; color: #333;">Climate-Smart Clinics</h4>
                    <p style="color: #666; line-height: 1.7;">We retrofit rural health facilities with solar power, rainwater harvesting, and sustainable waste management to ensure continuous care.</p>
                </div>
            </div>
            <!--  Single Service  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-service text-center" style="background: #fff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; height: 100%; border-bottom: 3px solid transparent;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 25px; display: flex; align-items: center; justify-content: center; background: rgba(255, 159, 111, 0.1); border-radius: 50%;">
                        <img src="{{ asset('img/service/2.png') }}" alt="" style="max-width: 40px;">
                    </div>
                    <h4 style="font-weight: 700; font-size: 20px; margin-bottom: 15px; color: #333;">WASH for Motherhood</h4>
                    <p style="color: #666; line-height: 1.7;">We implement water, sanitation, and hygiene (WASH) infrastructure in healthcare centers to prevent infections and reduce mortality.</p>
                </div>
            </div>
            <!--  Single Service  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-service text-center" style="background: #fff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; height: 100%; border-bottom: 3px solid transparent;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 25px; display: flex; align-items: center; justify-content: center; background: rgba(255, 159, 111, 0.1); border-radius: 50%;">
                        <img src="{{ asset('img/service/3.png') }}" alt="" style="max-width: 40px;">
                    </div>
                    <h4 style="font-weight: 700; font-size: 20px; margin-bottom: 15px; color: #333;">Community Resilience</h4>
                    <p style="color: #666; line-height: 1.7;">We train community health workers on climate-health risks and advocate for policies that prioritize environmental health.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End -->

<!-- Volunteer Area Start -->
<div id="volunteer-area" class="volunteer-area section pt-120 pb-120" style="background: #222; position: relative;">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="section-title text-center col-lg-8 col-12 mb-50">
                <h2 style="color: #fff; font-size: 36px; margin-bottom: 20px;">Partners & Collaboration</h2>
                <div style="width: 60px; height: 3px; background: #ff9f6f; margin: 0 auto 30px;"></div>
                <p style="color: #aaa; font-size: 18px; line-height: 1.8;">ACHEA believes that sustainable impact is achieved through strong partnerships. We collaborate with governments, development partners, health institutions, climate networks, and community organizations to scale integrated solutions.</p>
                <p style="color: #aaa; font-size: 18px; line-height: 1.8; margin-top: 20px;">Our partnership approach focuses on shared goals, local ownership, and evidence-based interventions that strengthen health systems, protect the environment, and improve lives across Africa.</p>
                
                <a href="#" class="text-white" style="display: inline-block; margin-top: 40px; border: 2px solid #ff9f6f; color: #ff9f6f; padding: 12px 35px; border-radius: 30px; font-weight: 600; text-transform: uppercase; transition: all 0.3s ease;">Become a Partner</a>
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
