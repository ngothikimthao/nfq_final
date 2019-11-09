<?php

namespace App\Http\Controllers;

use App\Post;
use View;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function postAdd(PostRequest $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->link = $request->link;
        $post->category = $request->category;
        $post->save();

        Log::info('Add post sucessfully: '.$post->title );
        return redirect()->route('index');
    }

    public function getAdd()
    {
         return View::make('addPost');
    }

    public function get()
    {
        $posts = Post::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->paginate(5);
        return View('index',compact('posts'));
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete($id);
        Log::info('Delete post sucessfully: '.$post->title );
        return back()->with('sucess','Delete sucessfully!');
    }

    public function getUpdate($id){
        $post = Post::find($id);
        return View::make('updatePost')->with('post',$post);
    }

    public function postUpdate(PostRequest $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->link = $request->link;
        $post->category = $request->category;

        $post->save();
        Log::info('Update post sucessfully: '.$post->title );
        return redirect()->route('index');
    }
}
