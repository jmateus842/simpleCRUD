<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
        return redirect('/');
    }
}
