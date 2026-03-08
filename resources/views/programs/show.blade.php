@extends('layouts.master')
@section('title', $program->title)

@section('content')

<div class="page-banner-area section overlay gradient" style="background-image: url('{{ asset('img/hero/1.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white">{{ $program->title }}</h2>
                <ul class="p-0 d-flex align-items-center gap-3 text-white">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><span class="bi bi-chevron-right"></span></li>
                    <li><a href="{{ route('programs.index') }}">Programs</a></li>
                    <li><span class="bi bi-chevron-right"></span></li>
                    <li><a href="#">{{ $program->title }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="program-details-area" class="program-details-area section pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mb-30">
                <div class="program-details-content">
                    <div class="image mb-40">
                        <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    </div>
                    <h2 style="font-size: 36px; font-weight: 800; color: #333; margin-bottom: 25px;">{{ $program->title }}</h2>
                    <div class="meta mb-30" style="display: flex; gap: 20px; color: #666; font-size: 14px;">
                        <span><i class="fa fa-calendar text-primary mr-2"></i> {{ $program->created_at->format('d M, Y') }}</span>
                        <span><i class="fa fa-map-marker text-primary mr-2"></i> {{ $program->location }}</span>
                        <span class="text-uppercase font-weight-bold" style="color: #ff9f6f;">{{ $program->status }}</span>
                    </div>
                    <div class="content" style="color: #666; line-height: 1.8; font-size: 16px;">
                        {!! $program->content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-30">
                <div class="sidebar">
                    <div class="widget mb-40" style="background: #f9f9f9; padding: 30px; border-radius: 10px;">
                        <h4 style="font-weight: 700; margin-bottom: 20px; color: #333;">Program Details</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                                <strong style="display: block; color: #333; margin-bottom: 5px;">Status:</strong>
                                <span style="color: #666;">{{ ucfirst($program->status) }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                                <strong style="display: block; color: #333; margin-bottom: 5px;">Location:</strong>
                                <span style="color: #666;">{{ $program->location }}</span>
                            </li>
                            <li style="margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
                                <strong style="display: block; color: #333; margin-bottom: 5px;">Start Date:</strong>
                                <span style="color: #666;">{{ $program->start_date ? \Carbon\Carbon::parse($program->start_date)->format('d M, Y') : 'N/A' }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget mb-40" style="background: #ff9f6f; padding: 30px; border-radius: 10px; color: #fff; text-align: center;">
                        <h4 style="font-weight: 700; margin-bottom: 20px; color: #fff;">Want to Support?</h4>
                        <p style="margin-bottom: 25px; color: rgba(255,255,255,0.9);">Help us continue this vital work by donating or volunteering.</p>
                        <a href="#" class="btn btn-light rounded-pill text-dark px-3">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
