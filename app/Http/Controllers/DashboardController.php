<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index()
    {
        $posts = DB::table('posts')->count();
        $services = DB::table('services')->count();
        $users = DB::table('users')->count();
        $company = DB::table('company')->first();
        return Inertia::render('Dashboard', [
            'posts' => $posts,
            'services' => $services,
            'users' => $users,
            'company' => $company,
        ]);
    }
}
