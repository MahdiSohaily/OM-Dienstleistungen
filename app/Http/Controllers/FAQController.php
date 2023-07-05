<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FAQController extends Controller
{
    function index()
    {
        return Inertia::render('FAQ/Show');
    }
}
