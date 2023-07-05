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
        $faqs = DB::table('faqs')->get();

        return Inertia::render('FAQ/Show', [
            'company' => $company_info,
            'faqs' => $faqs
        ]);
    }
}
