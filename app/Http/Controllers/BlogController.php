<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('menu.blog.view', compact('blogs'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = auth()->user()->id;
        $blog->save();

        return redirect()->route('blog')->with('success', 'Blog created successfully.');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->route('blog')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('blog')->with('success', 'Blog deleted successfully.');
    }
}
