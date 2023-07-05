<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index()
    {
        $company_info = DB::table('company')->first();
        $main_page = DB::table('main_page')->first();
        $faqs = DB::table('faqs')->get();
        return Inertia::render('Main/Show', [
            'company' => $company_info,
            'main_page' => $main_page,
            'faqs' => $faqs
        ]);
    }

    function storeHeader(Request $request)
    {
        $title = $request->input('title');
        $title_desc = $request->input('title_desc');
        $mail_to_title = $request->input('mail_to_title');
        $social_title = $request->input('social_title');

        DB::table('main_page')
            ->where('id', 1)
            ->update([
                'title' => $title,
                'title_desc' => $title_desc,
                'mail_to_title' => $mail_to_title,
                'social_title' => $social_title,
            ]);
    }


    function storeServices(Request $request)
    {
        $services_title = $request->input('services_title');
        $services_title_desc = $request->input('services_title_desc');

        DB::table('main_page')
            ->where('id', 1)
            ->update([
                'services_title' => $services_title,
                'services_title_desc' => $services_title_desc
            ]);
    }

    function storeMini(Request $request)
    {
        $mini_description = $request->input('mini_description');

        DB::table('main_page')
            ->where('id', 1)
            ->update([
                'mini_description' => $mini_description,
            ]);
    }

    function storefaqs(Request $request)
    {
        $faqs_title = $request->input('faqs_title');
        $faqs_title_desc = $request->input('faqs_title_desc');

        DB::table('main_page')
            ->where('id', 1)
            ->update([
                'faq_title' => $faqs_title,
                'faq_title_desc' => $faqs_title_desc,
            ]);
    }
}
