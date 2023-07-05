<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    function index()
    {
        $company_info = DB::table('company')->first();
        $about_page = DB::table('about_page')->first();
        $social_media = DB::table('social_media')->first();
        return Inertia::render('FAQ/Show', [
            'company' => $company_info,
            'about_page' => $about_page,
            'social_media' => $social_media,
        ]);
    }
}
