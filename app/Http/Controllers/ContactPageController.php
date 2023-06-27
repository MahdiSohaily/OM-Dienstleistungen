<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ContactPageController extends Controller
{
    function index()
    {
        $company_info = DB::table('company')->first();
        $contact_page = DB::table('contact_page')->first();

        return Inertia::render('Contact/Show', ['company' => $company_info, 'contact_page' => $contact_page]);
    }

    function storeHeader(Request $request)
    {
        $form_title = $request->input('form_title');
        $form_desc = $request->input('form_desc');

        DB::table('contact_page')
            ->where('id', 1)
            ->update([
                'form_title' => $form_title,
                'form_desc' => $form_desc,
            ]);
    }
    function storeMap(Request $request)
    {
        $map_title = $request->input('map_title');
        $map_desc = $request->input('map_desc');

        DB::table('contact_page')
            ->where('id', 1)
            ->update([
                'map_title' => $map_title,
                'map_desc' => $map_desc,
            ]);
    }
}
