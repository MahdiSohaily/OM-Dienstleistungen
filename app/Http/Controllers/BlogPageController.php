<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class BlogPageController extends Controller
{
    public function index()
    {
        $company_info = DB::table('company')->first();
        $blog_page = DB::table('blog_page')->first();
        $posts = DB::table('posts')->get();

        return Inertia::render('Blog/Show', [
            'company' => $company_info,
            'page' => $blog_page,
            'posts' => $posts
        ]);
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', '=', $id)->first();
        return Inertia::render('Blog/Post', [
            'data' => $post
        ]);
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $intro_text = $request->input('intro_text');
        $content = $request->input('content');

        DB::table('posts')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'intro_text' => $intro_text,
                'content' => $content,
            ]);
    }
}
