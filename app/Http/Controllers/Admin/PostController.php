<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{

    public function index()

    {   $posts = Post::latest()->get();
        return view('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        
        $post = new Post($request->all());
        $post->user_id = auth()->user()->id;
        $post->save();
        $video = $request->file('avatar');
        $post->addMedia($video)->toMediaCollection('avatars');
        return redirect()
        ->back()
        ->with('success', 'Post create successfully!');;
        
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post)
    
    {
        // $post = Post::findOrFail($id);

        // if(auth()->user()->id !== $post->user_id) {
        //     return redirect('dashboard')
        //     ->with('error', 'You are not authorized to edit this post.');
        // }
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request,$id)
    {
        
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()
        ->back()
        ->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }

}
