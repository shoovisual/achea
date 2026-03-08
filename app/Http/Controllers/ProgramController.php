<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('status', 'active')->paginate(9);
        return view('programs.index', compact('programs'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('programs.show', compact('program'));
    }
}
