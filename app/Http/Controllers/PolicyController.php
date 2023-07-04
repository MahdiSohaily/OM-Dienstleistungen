<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PolicyController extends Controller
{
    function index() {
        return Inertia::render()
    }
}
