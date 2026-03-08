<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', 'published')->orderBy('published_at', 'desc')->paginate(9);
        return view('news.index', compact('news'));
    }

    public function show($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        return view('news.show', compact('newsItem'));
    }
}
