<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class UploadDataController extends Controller
{


    public function index()

    {   $posts = Post::latest()->get();
        foreach ($posts as $post) {
            $post->thumbnail_url = $post->getFirstMediaUrl('images', 'preview');
        }
        return view('user.posts.index',compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());
        $post->user_id = Auth::id();
        $post->save();
        $video = $request->file('avatar');
        $post->addMedia($video)->toMediaCollection('avatars');
        return redirect()->route('user.posts.index');
        
    }

    public function show(Post $post)
    {
        return view('user.posts.show', compact('post'));
    }

    public function edit($id)
    
    {
        $post = Post::findOrFail($id);

        if(auth()->user()->id !== $post->user_id) {
            return redirect('dashboard')
            ->with('error', 'You are not authorized to edit this post.');
        }
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request,$id)
    {
        
        $post = Post::findOrFail($id);
        $post->update($request->all());

        // $video = $request->file('avatar');
        // $post->addMedia($video)->toMediaCollection('avatars');

        return redirect()->route('user.posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }

}
