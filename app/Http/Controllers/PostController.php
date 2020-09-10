<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listAllPosts()
    {
        $posts = Post::all();
        return view('listAllPosts',[
            'posts' => $posts
        ]);
    }

    public function createPost(){
        return view('createPost');
    }

    public function storePost(Request $request){
    $post = new Post();
    $post->title = $request->title;
    $post->text = $request->text;
    $post->save();

    return redirect()->route('post.listAll');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('post.listAll');
    }

}