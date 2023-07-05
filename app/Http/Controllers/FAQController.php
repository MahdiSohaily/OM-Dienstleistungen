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

    function update($id)
    {
        $company_info = DB::table('company')->first();
        $faq = DB::table('faqs')->where('id', $id)->first();
        if ($faq) {
            return Inertia::render('FAQ/partials/faq', [
                'company' => $company_info,
                'faq' => $faq
            ]);
        } else {
            return Inertia::render('FAQ/partials/404', [
                'company' => $company_info
            ]);
        }
    }

    function updateFAQ(Request $request)
    {
        $id = $request->input('id');
        $question = $request->input('question');
        $answer = $request->input('answer');

        DB::table('faqs')
            ->where('id', $id)
            ->update([
                'question' => $question,
                'answer' => $answer,
            ]);
    }
}
