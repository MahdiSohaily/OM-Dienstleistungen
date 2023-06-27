<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class ServicePageController extends Controller
{
    public function index()
    {
        $company_info = DB::table('company')->first();
        $services_page = DB::table('services_page')->first();
        $services = DB::table('services')->get();

        return Inertia::render('Services/Show', [
            'company_info' => $company_info,
            'services_page' => $services_page,
            'services' => $services
        ]);
    }

    function storeHeader(Request $request)
    {
        $title = $request->input('title');
        $title_desc = $request->input('title_desc');

        DB::table('services_page')
            ->where('id', 1)
            ->update([
                'title' => $title,
                'title_desc' => $title_desc,
            ]);
    }

    function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');

        DB::table('services')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
            ]);
    }
}
