@extends('layouts.master')
@section('title', $newsItem->title)

@section('content')

<div class="page-banner-area section overlay gradient" style="background-image: url('{{ asset('img/hero/1.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white">{{ Str::limit($newsItem->title, 30) }}</h2>
                <ul class="p-0 d-flex align-items-center gap-3 text-white">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><span class="bi bi-chevron-right"></span></li>
                    <li><a href="{{ route('news.index') }}">News</a></li>
                    <li><span class="bi bi-chevron-right"></span></li>
                    <li><a href="#">Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="news-details-area" class="news-details-area section pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mb-30 mx-auto">
                <div class="news-details-content">
                    <div class="image mb-40">
                        <img src="{{ asset($newsItem->image) }}" alt="{{ $newsItem->title }}" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    </div>
                    <div class="meta mb-20" style="display: flex; gap: 20px; color: #666; font-size: 14px;">
                        <span><i class="fa fa-calendar text-primary mr-2"></i> {{ $newsItem->published_at ? $newsItem->published_at->format('d M, Y') : $newsItem->created_at->format('d M, Y') }}</span>
                        <span><i class="fa fa-user text-primary mr-2"></i> {{ $newsItem->author ?? 'Admin' }}</span>
                    </div>
                    <h2 style="font-size: 32px; font-weight: 800; color: #333; margin-bottom: 25px;">{{ $newsItem->title }}</h2>
                    <div class="lead mb-30" style="font-size: 18px; color: #555; font-style: italic; border-left: 4px solid #ff9f6f; padding-left: 20px;">
                        {{ $newsItem->summary }}
                    </div>
                    <div class="content" style="color: #666; line-height: 1.8; font-size: 16px;">
                        {!! $newsItem->content !!}
                    </div>
                    
                    <div class="share-area mt-50 pt-30" style="border-top: 1px solid #eee;">
                        <h5 style="font-weight: 700; color: #333; margin-bottom: 15px;">Share this story:</h5>
                        <div class="social-share">
                            <a href="#" class="mr-3 text-dark"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="mr-3 text-dark"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="mr-3 text-dark"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
