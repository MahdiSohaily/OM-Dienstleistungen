<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    function storeHeader(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $stablish_year = $request->input('stablish_year');
        $company_info = $request->input('company_info');
        $email_address = $request->input('email_address');
        $phone = $request->input('phone');

        DB::table('company')
            ->where('id', 1)
            ->update([
                'name' => $name,
                'address' => $address,
                'stablish_year' => $stablish_year,
                'company_info' => $company_info,
                'email_address' => $email_address,
                'phone' => $phone,
            ]);
    }
}
