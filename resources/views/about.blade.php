@extends('layouts.master')

@section('title', 'About Us')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="page-banner-bg" style="background-image: url('{{ asset('img/hero/1.jpg') }}'); background-size: cover; background-position: center; padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-banner-content text-center">
                        <h1 style="color: #fff; font-size: 50px; font-weight: 700;">ABOUT US</h1>
                        <p style="color: #fff; font-size: 18px;">Building Africa’s Resilience at the Nexus of Climate, Health, and Environment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area section pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <!-- About Image -->
            <div class="col-lg-6 col-12 mb-30">
                <div class="about-image">
                    <img src="{{ asset('img/about/about.jpg') }}" alt="About Image" style="width: 100%; border-radius: 5px;">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-lg-6 col-12 mb-30">
                <div class="about-content">
                    <h3 style="margin-bottom: 20px;">African Climate, Health & Environmental Actions (ACHEA)</h3>
                    <p style="margin-bottom: 15px;">ACHEA is a pan-African initiative working at the intersection of climate action, maternal and neonatal health, and environmental sustainability.</p>
                    <p style="margin-bottom: 15px;">Our mission is to integrate climate-smart solutions into health systems while promoting planetary health and community resilience. We recognize that climate change exacerbates health risks, particularly for mothers and newborns, while environmental degradation undermines livelihoods and wellbeing.</p>
                    <p>ACHEA responds through innovation, collaboration, and community-led action—ensuring that Africa’s most vulnerable populations are not left behind.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Programs Area Start -->
<div id="programs-area" class="programs-area section bg-gray pt-120 pb-90" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-80">
                <div class="section-title">
                    <h2>PROGRAMS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Program 1 -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-service text-center" style="background: #fff; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); height: 100%;">
                    <i class="bi bi-hospital" style="font-size: 40px; color: #8bc34a; margin-bottom: 20px; display: block;"></i>
                    <h4>Climate-Smart Maternal Clinics</h4>
                    <p>We support the development of climate-resilient health facilities through solar power, reliable water systems, and heat-adaptive infrastructure. These clinics ensure safe deliveries, vaccine storage, and uninterrupted maternal and neonatal care.</p>
                </div>
            </div>
            <!-- Program 2 -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-service text-center" style="background: #fff; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); height: 100%;">
                    <i class="bi bi-droplet" style="font-size: 40px; color: #8bc34a; margin-bottom: 20px; display: block;"></i>
                    <h4>WASH for Safe Motherhood</h4>
                    <p>We improve access to clean water, sanitation, and hygiene in health facilities and communities. Our interventions include clean birth kits, community-managed water points, and improved sanitation facilities that promote safe childbirth and dignity for women.</p>
                </div>
            </div>
            <!-- Program 3 -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-service text-center" style="background: #fff; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); height: 100%;">
                    <i class="bi bi-people" style="font-size: 40px; color: #8bc34a; margin-bottom: 20px; display: block;"></i>
                    <h4>Community Resilience Programs</h4>
                    <p>We empower communities through mother-led climate adaptation groups, early warning systems linked to maternal health alerts, and emergency preparedness plans for climate-related disasters.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Programs Area End -->

<!-- Partners Area Start -->
<div id="partners-area" class="partners-area section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto text-center">
                <div class="section-title mb-40">
                    <h2>PARTNERS & COLLABORATION</h2>
                </div>
                <p style="margin-bottom: 15px;">ACHEA believes that sustainable impact is achieved through strong partnerships. We collaborate with governments, development partners, health institutions, climate networks, and community organizations to scale integrated solutions.</p>
                <p>Our partnership approach focuses on shared goals, local ownership, and evidence-based interventions that strengthen health systems, protect the environment, and improve lives across Africa.</p>
            </div>
        </div>
    </div>
</div>
<!-- Partners Area End -->

@endsection
