<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(3);
        return view('templatePages.blog', compact('posts'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templatePages.addPostForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = new Post();
        // dd($request->image);
        if($request->image->extension()){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('blog/img'), $imageName);
        }

        $data['title'] = $request->title;
        $data['image'] = $imageName;
        $data['description'] = $request->description;
        post::create($data);

        // post::create($request->all());


        // $create = post::create($request->all());
        // $post = $create->id;

        $posts = Post::latest()->paginate(3);
        return view('templatePages.blog', compact('posts'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('templatePages.showpost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('templatePages.addPostForm',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // dd($request);
        // dd($post);
        // dd($request->image->getClientOriginalName());

        $imageName = "";

        if($request->image->extension()){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('blog/img'), $imageName);
        }

        // $post->update($request->all());

        $data['title'] = $request->title;
        $data['image'] = $imageName;
        $data['description'] = $request->description;
        $post->update($data);
        return view('templatePages.showpost', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $posts = Post::latest()->paginate(3);
        return view('templatePages.blog', compact('posts'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
