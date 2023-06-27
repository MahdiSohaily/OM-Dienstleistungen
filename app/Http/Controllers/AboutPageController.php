<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class AboutPageController extends Controller
{
    public function index()
    {
        $company_info = DB::table('company')->first();
        $about_page = DB::table('about_page')->first();
        $social_media = DB::table('social_media')->first();

        return Inertia::render('About/Show', [
            'company' => $company_info,
            'about_page' => $about_page,
            'social_media' => $social_media,
        ]);
    }

    function storeHeader(Request $request)
    {
        $title = $request->input('title');
        $title_desc = $request->input('title_desc');
        $mail_to_title = $request->input('mail_to_title');
        $social_title = $request->input('social_title');

        DB::table('about_page')
            ->where('id', 1)
            ->update([
                'title' => $title,
                'title_desc' => $title_desc,
                'mail_to_title' => $mail_to_title,
                'social_title' => $social_title,
            ]);
    }

    function storeAbout(Request $request)
    {
        $who_we_are = $request->input('who_we_are');
        $who_we_are_desc = $request->input('who_we_are_desc');
        $what_we_do = $request->input('what_we_do');
        $what_we_do_desc = $request->input('what_we_do_desc');

        DB::table('about_page')
            ->where('id', 1)
            ->update([
                'who_we_are' => $who_we_are,
                'who_we_are_desc' => $who_we_are_desc,
                'what_we_do' => $what_we_do,
                'what_we_do_desc' => $what_we_do_desc,
            ]);
    }
    function storeCatelog(Request $request)
    {
        $catelog_title = $request->input('catelog_title');
        $catelog_title_2 = $request->input('catelog_title_2');
        $catelog_desc = $request->input('catelog_desc');
        $catelog_btn = $request->input('catelog_btn');

        DB::table('about_page')
            ->where('id', 1)
            ->update([
                'catelog_title' => $catelog_title,
                'catelog_title_2' => $catelog_title_2,
                'catelog_desc' => $catelog_desc,
                'catelog_btn' => $catelog_btn,
            ]);
    }
}
