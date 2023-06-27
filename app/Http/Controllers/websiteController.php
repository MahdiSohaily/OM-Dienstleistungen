<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class websiteController extends Controller
{
    public function index()
    {
        $company_info = DB::table('company')->first();
        $main_page = DB::table('main_page')->first();

        return Inertia::render('Home', ['company' => $company_info, 'main_page' => $main_page]);
    }

    public function about()
    {
        $company_info = DB::table('company')->first();
        $about_page = DB::table('about_page')->first();

        return Inertia::render('website/Pages/about/About', ['company' => $company_info, 'about_page' => $about_page]);
    }

    public function services()
    {

        $company_info = DB::table('company')->first();
        $services_page = DB::table('services_page')->first();
        $services = DB::table('services')->get();

        return Inertia::render('website/Pages/services/Services', [
            'company' => $company_info,
            'services_page' => $services_page,
            'services' => $services
        ]);
    }

    public function blog()
    {
        $company_info = DB::table('company')->first();
        $blog_page = DB::table('blog_page')->first();
        $posts = DB::table('posts')->get();
        return Inertia::render('website/Pages/blog/Blog', [
            'company' => $company_info,
            'blog_page' => $blog_page,
            'posts' => $posts
        ]);
    }

    public function post($id)
    {
        $company_info = DB::table('company')->first();
        $post = DB::table('posts')->where('id', $id)->first();
        return Inertia::render('website/Pages/blog/Post', ['company' => $company_info, 'post' => $post]);
    }

    public function contact()
    {
        $company_info = DB::table('company')->first();
        $contact_page = DB::table('contact_page')->first();
        return Inertia::render('website/Pages/contact/Contact', ['company' => $company_info, 'contact_page' => $contact_page]);
    }
}
