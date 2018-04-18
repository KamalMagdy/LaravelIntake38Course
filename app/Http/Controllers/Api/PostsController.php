<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Post;



class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(3);
        return PostResource::collection($posts); 
    }
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());
        return new PostResource($post);
    }

    public function destroy($id)
    {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect(route('posts.index'));
    } 

}
