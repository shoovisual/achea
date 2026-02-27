@extends('layouts.master')
@section('title', 'Home')
@section('content')
    @include('components.hero-section')
        <!-- About Area End -->
        <!-- Key Pillars Area Start -->
        <div id="pillars-area" class="section pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>KEY PILLARS</h2>
                        <p style="max-width: 800px; margin: 0 auto;">At ACHEA, We believe that Africa's most pressing challenges are interconnected. Climate change exacerbates health risks, and environmental degradation undermines livelihoods and wellbeing. Our mission is to integrate, innovate, and implement solutions that address these issues holistically.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="service-item text-center" style="padding: 40px 30px; background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 8px; transition: all 0.3s ease; height: 100%;">
                            <div class="icon" style="font-size: 50px; color: #ff9f6f; margin-bottom: 25px;"><i class="fa fa-leaf"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 15px; font-size: 20px;">Climate Action</h4>
                            <p style="color: #666;">Driving adaptation strategies, promoting clean energy adoption, and advancing climate-smart health initiatives.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="service-item text-center" style="padding: 40px 30px; background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 8px; transition: all 0.3s ease; height: 100%;">
                            <div class="icon" style="font-size: 50px; color: #ff9f6f; margin-bottom: 25px;"><i class="fa fa-globe"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 15px; font-size: 20px;">Planetary Health</h4>
                            <p style="color: #666;">Restoring ecosystems, conserving biodiversity, and ensuring clean air and water for all communities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="service-item text-center" style="padding: 40px 30px; background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 8px; transition: all 0.3s ease; height: 100%;">
                            <div class="icon" style="font-size: 50px; color: #ff9f6f; margin-bottom: 25px;"><i class="fa fa-users"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 15px; font-size: 20px;">Community Resilience</h4>
                            <p style="color: #666;">Strengthening health systems, fostering sustainable livelihoods, and empowering women and youth to lead.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Key Pillars Area End -->

        <!-- Crisis Intersection Statement Area Start -->
        <div id="about-area" class="about-area section pb-120 pt-120" style="background: linear-gradient(to right, #f9f9f9, #ffffff);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 order-lg-2 mb-30">
                        <div class="about-image-2" style="position: relative; border-radius: 8px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                            <img src="{{ asset('img/about/about-2.jpg') }}" alt="Image" style="width: 100%; height: auto; display: block;">
                            <a class="video-popup play-btn" href="https://www.youtube.com/watch?v=mcixldqDIEQ" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; line-height: 80px; text-align: center; background: #fff; color: #ff9f6f; border-radius: 50%; font-size: 30px; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);"><i class="zmdi zmdi-play" style="margin-left: 5px;"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-30">
                        <div class="about-content-2" style="padding-right: 30px;">
                            <span style="display: block; color: #ff9f6f; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px;">The Challenge</span>
                            <h2 style="font-size: 42px; font-weight: 800; line-height: 1.2; margin-bottom: 25px; color: #333;">The Crisis Intersection</h2>
                            <p style="font-size: 18px; line-height: 1.8; color: #666; margin-bottom: 30px;">Climate change threatens vulnerable communities and affects maternal and neonatal survival. Extreme heat increases preterm births, while water scarcity compromises hygiene during delivery. Coupled with food insecurity and floods that disrupt health services, these interconnected challenges demand a unified response.</p>
                            <a href="{{ route('about') }}" class="button rounded-pill text-white">View Details <i class="bi bi-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Crisis Intersection Statement Area End -->
        <!-- Crisis Circles Area Start -->
        <div id="service-area" class="service-area section pt-120 pb-120">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>Three Interconnected Circles</h2>
                    </div>
                </div>
                @php
                     $services = [
                        [
                            'image' => 'img/service/1.png',
                            'title' => 'Climate Impacts',
                            'description' => 'Heat stress, floods, droughts, vector-borne diseases'
                        ],
                        [
                            'image' => 'img/service/2.png',
                            'title' => 'WASH Crisis',
                            'description' => 'Contaminated water, poor sanitation, hygiene gaps in clinics'
                        ],
                        [
                            'image' => 'img/service/3.png',
                            'title' => 'Maternal/Neonatal Health',
                            'description' => 'Infection risks, preterm births, delivery complications'
                        ],
                    ];
                @endphp
                <!-- Services -->
                <div class="row">
                    @foreach ($services as $service)
                        <div class="single-service text-center col-lg-4 d-flex flex-column col-md-6 col-12 justify-content-center align-items-center mb-30">
                            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" width="50">
                            <h4 class="text-lg">{{ $service['title'] }}</h4>
                            <p>{{ $service['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Crisis Circles Area End -->
        <!-- Integrated Solutions Area Start -->
        <div id="solutions-area" class="section bg-gray pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>Our Integrated Solutions</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Solution 1 -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-project text-center" style="background: #fff; padding: 40px 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 8px; transition: all 0.3s ease;">
                            <div class="icon" style="font-size: 50px; color: #ff9f6f; margin-bottom: 25px;">
                                <i class="fa fa-sun-o"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px; font-size: 20px;">Climate-Smart Maternal Clinics</h4>
                            <p style="margin-bottom: 20px; color: #666;">Solar-powered, water-secure, and heat-resilient facilities ensuring safe deliveries even in extreme weather.</p>
                            <a href="#" style="color: #ff9f6f; font-weight: 600; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">Learn More <i class="fa fa-angle-right ml-1"></i></a>
                        </div>
                    </div>
                    <!-- Solution 2 -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-project text-center" style="background: #fff; padding: 40px 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 8px; transition: all 0.3s ease;">
                            <div class="icon" style="font-size: 50px; color: #ff9f6f; margin-bottom: 25px;">
                                <i class="fa fa-tint"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px; font-size: 20px;">WASH for Safe Motherhood</h4>
                            <p style="margin-bottom: 20px; color: #666;">Clean birth kits, community water management, and sanitation to prevent infections and ensure hygiene.</p>
                            <a href="#" style="color: #ff9f6f; font-weight: 600; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">Learn More <i class="fa fa-angle-right ml-1"></i></a>
                        </div>
                    </div>
                    <!-- Solution 3 -->
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <div class="single-project text-center" style="background: #fff; padding: 40px 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-radius: 8px; transition: all 0.3s ease;">
                            <div class="icon" style="font-size: 50px; color: #ff9f6f; margin-bottom: 25px;">
                                <i class="fa fa-users"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px; font-size: 20px;">Community Resilience Programs</h4>
                            <p style="margin-bottom: 20px; color: #666;">Empowering women through early warning systems, emergency transport, and climate adaptation groups.</p>
                            <a href="#" style="color: #ff9f6f; font-weight: 600; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">Learn More <i class="fa fa-angle-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Integrated Solutions Area End -->
        <!-- Video Area Start -->
        <div id="video-area" class="video-area section overlay py-30" style="position: relative; background-attachment: fixed;">
            <!-- Dark Overlay for better text contrast -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(18, 18, 18, 0.7); z-index: 0;"></div>

            <div class="container" style="position: relative; z-index: 1;">
                <div class="row justify-content-center">
                    <!--  Video Wrapper  -->
                    <div class="video-wrapper col-lg-10 col-12 text-center">
                        <div style="margin-bottom: 25px;">
                            <span style="display: inline-block; padding: 10px 25px; background: rgba(255, 159, 111, 0.2); color: #ff9f6f; border-radius: 30px; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 2px; border: 1px solid rgba(255, 159, 111, 0.3);">
                                Impact in Action
                            </span>
                        </div>
                        <h1 style="color: #fff; font-size: 48px; font-weight: 800; margin-bottom: 30px; line-height: 1.3; text-transform: uppercase;">Watch Our Latest <br><span style="color: #ff9f6f;">Campaign Video</span></h1>
                        <p style="color: #e0e0e0; font-size: 18px; line-height: 1.8; margin-bottom: 60px; max-width: 800px; margin-left: auto; margin-right: auto;">Discover how ACHEA is integrating climate action with maternal and neonatal health to build resilient communities across Africa. Our holistic approach addresses the interconnected challenges of our time.</p>

                        <a class="video-popup modern-play-btn text-white" href="https://www.youtube.com/watch?v=mcixldqDIEQ">
                            <i class="fa fa-play" style="margin-left: 5px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        <!-- Project Area Start -->
        <div id="project-area" class="project-area section pt-120 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>RECENT PROJECT</h2>
                    </div>
                </div>
                @php
                    $projects = [
                            [
                                'image' => 'img/project/1.jpg',
                                'title' => 'Solar-Powered Maternity Wards',
                                'slug'  => '#',
                                'tags'  => ['Energy', 'Health'],
                                'description' => 'Ensuring reliable energy for safe deliveries in rural clinics. Our solar installations provide lighting and refrigeration for vaccines.',
                            ],
                            [
                                'image' => 'img/project/2.jpg',
                                'title' => 'Mangrove Restoration for Health',
                                'slug'  => '#',
                                'tags'  => ['Ecosystem', 'Resilience'],
                                'description' => 'Protecting coastlines and improving water quality for communities. Healthy mangroves support biodiversity and local livelihoods.',
                            ],
                            [
                                'image' => 'img/project/3.jpg',
                                'title' => 'Clean Birth Kits Initiative',
                                'slug'  => '#',
                                'tags'  => ['WASH', 'Maternal'],
                                'description' => 'Providing essential hygiene supplies to mothers in climate-affected areas. Reducing infection risks during childbirth.',
                            ],
                        ];
                @endphp
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 col-12 mb-30">
                            <div class="single-project" style="background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">

                                <!-- Image -->
                                <div class="image" style="position: relative; overflow: hidden; height: 240px;">
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                                    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.2); opacity: 0; transition: opacity 0.3s ease;"></div>
                                </div>

                                <div class="content" style="padding: 30px; flex-grow: 1; display: flex; flex-direction: column;">
                                    <!-- Tags -->
                                    <div class="tags mb-15">
                                        @foreach ($project['tags'] as $tag)
                                            <span style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #ff9f6f; background: rgba(255, 159, 111, 0.1); padding: 4px 12px; border-radius: 20px; margin-right: 5px;">{{ $tag }}</span>
                                        @endforeach
                                    </div>

                                    <!-- Title -->
                                    <h4 style="margin-bottom: 15px; font-weight: 700; line-height: 1.4;">
                                        <a href="{{ $project['slug'] }}" style="color: #333; transition: color 0.3s ease; text-decoration: none;">
                                            {{ $project['title'] }}
                                        </a>
                                    </h4>

                                    <!-- Content -->
                                    <p style="color: #666; margin-bottom: 25px; flex-grow: 1;">{{ $project['description'] }}</p>

                                    <!-- Button -->
                                    <div class="mt-auto">
                                        <a href="{{ $project['slug'] }}" style="color: #ff9f6f; font-weight: 600; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; display: inline-flex; align-items: center;">
                                            Learn More <i class="bi bi-arrow-right ml-2" style="font-size: 12px; transition: transform 0.3s ease;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Project Area End -->
        @include('components.facts')
        <!-- Partners Area Start -->
        <div id="partners-area" class="client-area section pt-115 pb-115">
            <div class="container">
                 <div class="row">
                    <div class="section-title text-center col-12">
                        <h2>Partners & Collaborators</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partners Area End -->
        <!-- Blog Area Start -->
        <div id="blog-area" class="blog-area section pt-120 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-80">
                        <h2>LATEST NEWS</h2>
                    </div>
                </div>
                @php
                    $blogs = [
                        [
                            'image' => 'img/blog/1.jpg',
                            'title' => 'ACHEA Launches New Climate Strategy',
                            'slug' => '#',
                            'date' => '28 Jan 2026',
                            'comments' => 3,
                            'excerpt' => 'A comprehensive plan to address health risks in a warming world. We are prioritizing community-led adaptation.',
                        ],
                        [
                            'image' => 'img/blog/2.jpg',
                            'title' => 'Partnering with Local Midwives',
                            'slug' => '#',
                            'date' => '15 Feb 2026',
                            'comments' => 5,
                            'excerpt' => 'Empowering frontline workers with climate-smart tools. Midwives are key to building resilient health systems.',
                        ],
                        [
                            'image' => 'img/blog/3.jpg',
                            'title' => 'Water Scarcity and Maternal Health',
                            'slug' => '#',
                            'date' => '10 Mar 2026',
                            'comments' => 8,
                            'excerpt' => 'Understanding the critical link between access to water and safe childbirth. We must secure WASH services for all.',
                        ],
                    ];
                @endphp
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12 mb-30">
                            <div class="blog-item"
                                style="background:#fff;border-radius:8px;overflow:hidden;
                                        box-shadow:0 10px 30px rgba(0,0,0,0.05);
                                        transition:all 0.3s ease;height:100%;
                                        display:flex;flex-direction:column;">

                                <!-- Image -->
                                <div class="image" style="position:relative;overflow:hidden;height:240px;">
                                    <a href="{{ $blog['slug'] }}" style="display:block;width:100%;height:100%;">
                                        <img src="{{ asset($blog['image']) }}"
                                            alt="{{ $blog['title'] }}"
                                            style="width:100%;height:100%;object-fit:cover;
                                                    transition:transform 0.5s ease;">
                                    </a>
                                </div>

                                <!-- Content -->
                                <div class="content"
                                    style="padding:30px;flex-grow:1;
                                            display:flex;flex-direction:column;">

                                    <!-- Meta -->
                                    <div class="meta fix"
                                        style="margin-bottom:15px;font-size:13px;color:#999;">
                                        <span style="margin-right:15px;">
                                            <i class="fa fa-calendar"
                                            style="color:#ff9f6f;margin-right:5px;"></i>
                                            {{ $blog['date'] }}
                                        </span>
                                        <span>
                                            <i class="fa fa-comments"
                                            style="color:#ff9f6f;margin-right:5px;"></i>
                                            <a href="{{ $blog['slug'] }}" style="color:#999;">
                                                {{ $blog['comments'] }} Comments
                                            </a>
                                        </span>
                                    </div>

                                    <!-- Title -->
                                    <h4 style="margin-bottom:15px;font-weight:700;
                                            line-height:1.4;font-size:20px;">
                                        <a href="{{ $blog['slug'] }}"
                                        style="color:#333;transition:color 0.3s ease;
                                                text-decoration:none;">
                                            {{ $blog['title'] }}
                                        </a>
                                    </h4>

                                    <!-- Excerpt -->
                                    <p style="color:#666;margin-bottom:25px;flex-grow:1;">
                                        {{ $blog['excerpt'] }}
                                    </p>

                                    <!-- Button -->
                                    <div class="mt-auto">
                                        <a href="{{ $blog['slug'] }}" class="read-more"
                                        style="color:#ff9f6f;font-weight:600;
                                                text-transform:uppercase;font-size:14px;
                                                letter-spacing:1px;
                                                display:inline-flex;align-items:center;">
                                            LEARN MORE
                                            <i class="bi bi-arrow-right ml-2"
                                            style="font-size:12px;
                                                    transition:transform 0.3s ease;"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
