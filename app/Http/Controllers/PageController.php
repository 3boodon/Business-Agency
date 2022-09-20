<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home.index', [
            "sections" => Section::all(),
            "tags" => Tag::all(),
        ]);
    }
    public function show(Section $section)
    {
        return view('sections.show', [
            "section" => Section::findOrFail($section->id),
            "tags" => Tag::all(),
        ]);
    }
}
