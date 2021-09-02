<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $title = "Extremely Cold Temperatures in Western Europe";
        // $city = "Oksana Aloshyna";
        // $dd = 28, $mm = 2, $yyyy = 2018, $hh = 1, $min = 28, $ss = "AM";

        $blogs = blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new blog;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->category_id = $request->category_id;
        $blog -> save();
        return redirect(route('blogs.index'));
        // return $blog;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        return view('blog.show',compact('blog'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //

        $categories = category::all();
        // return $blog;
        return view('blog.edit',compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        $blog->title = $request->title;
        $blog->author = $request->author;

        $blog -> save();

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        // return $blog;
        $blog->delete();

        return redirect(route('blogs.index'));
    }
}
