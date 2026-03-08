@extends('layouts.master')
@section('title', 'Our Programs')

@section('content')

<div class="page-banner-area section overlay gradient" style="background-image: url('{{ asset('img/hero/1.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white">OUR PROGRAMS</h2>
                <ul class="p-0 d-flex align-items-center gap-3 text-white">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><span class="bi bi-chevron-right"></span></li>
                    <li><a href="{{ route('programs.index') }}">Programs</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="programs-area" class="programs-area section pb-90 pt-100">
    <div class="container">
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <span style="display: block; color: #ff9f6f; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px;">Our Focus</span>
                <h2 style="font-size: 42px; font-weight: 800; color: #333;">Core Programs</h2>
                <p style="max-width: 700px; margin: 20px auto 0; color: #666;">We implement sustainable solutions to empower communities and improve lives.</p>
            </div>
        </div>
        <div class="row">
            @foreach($programs as $program)
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-program text-center" style="background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease; height: 100%;">
                    <div class="image" style="position: relative; overflow: hidden;">
                        <a href="{{ route('programs.show', $program->slug) }}" style="display: block;">
                            <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                        </a>
                        <span class="status-badge" style="position: absolute; top: 15px; right: 15px; background: #ff9f6f; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600; text-transform: uppercase;">{{ $program->status }}</span>
                    </div>
                    <div class="content" style="padding: 30px;">
                        <h4 style="font-weight: 700; font-size: 20px; margin-bottom: 15px; color: #333;">
                            <a href="{{ route('programs.show', $program->slug) }}" style="color: #333; transition: color 0.3s ease;">{{ $program->title }}</a>
                        </h4>
                        <p style="color: #666; line-height: 1.7; margin-bottom: 20px;">{{ Str::limit($program->description, 100) }}</p>
                        <a href="{{ route('programs.show', $program->slug) }}" style="display: inline-block; color: #ff9f6f; font-weight: 600; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">Read More <i class="fa fa-angle-right ml-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                {{ $programs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>

@endsection
