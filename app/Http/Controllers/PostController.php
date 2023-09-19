<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Tables\Posts;
use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use App\Http\Requests\PostCreatRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.posts.posts', [
            'posts' => SpladeTable::for(Post::class)
            ->withGlobalSearch(columns: ['title','content'])
            ->defaultSort('title')
            ->column('index')
            ->column('title', sortable: true )
            ->column('content', sortable: true )
            ->column('actions')
            ->paginate(10),

            // 'posts' => Posts::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        $categories = Category::get();
        return view('front.posts.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCreatRequest $request)
    {
      Post::create($request->all());
      Toast::title('Post added!');
      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('front.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $users = User::get();
        $categories = Category::get();
        return view('front.posts.edit', compact('post','users', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCreatRequest $request, Post $post)
    {
        $post->update($request->all());
        Toast::title('Post updated!');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
