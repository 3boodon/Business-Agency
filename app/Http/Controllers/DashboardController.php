<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function sections()
    {
        return view('dashboard.sections.index', [
            "sections" => Section::latest()->paginate(5)
        ]);
    }
    public function tags()
    {
        return view('dashboard.tags.index', [
            "tags" => Tag::latest()->paginate(5)
        ]);
    }
}
