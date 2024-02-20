<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $IncomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $IncomingFields['title'] = strip_tags($IncomingFields['title']);
        $IncomingFields['body'] = strip_tags($IncomingFields['body']);

        $IncomingFields['user_id'] = auth()->id();

        Post::create($IncomingFields);
        return redirect('/home');
    }

    //funcion para ver los posts
    // In App\Http\Controllers\PostController.php

    public function showPosts()
    {
        $posts = Post::all();  // Fetch all posts
        return view('posts.index', compact('posts'));
    }

    public function destroy(Request $request)
    {
        $request->validate(['title' => 'required']); // Validate title presence

        $post = Post::where('user_id', auth()->id())
            ->where('title', $request->title)
            ->firstOrFail();

        $post->delete();

        return redirect('/home')->with('success', 'Post deleted!');
    }


    // ... other PostController methods ...

    public function destroyMultiple(Request $request)
    {
        $postIds = $request->post_ids; // Get array of post IDs

        if($postIds){ //If we actually received them and its not null
            Post::where('user_id', auth()->id())
                ->whereIn('id', $postIds)
                ->delete();

            return redirect('/home')->with('success', 'Selected posts deleted!');
        } else { //They must not have checked any posts
            return redirect('/home')->with('error', 'Please select the posts you wish to delete');
        }
    }



}
