<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $search = $request->input('search');
        $temp = $search;
        $posts = Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        // ->orWhere('body', 'LIKE', "%{$search}%")
        ->get();
        return view('s', compact('posts','temp'));
    }
     
}
