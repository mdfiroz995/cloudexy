<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Course;
use App\Models\Batch_Info;

class BlogController extends Controller
{
    public function blog()
    {
        $Post = Post::orderBy('id')->paginate(6);
        return view('blog',['posts'=>$Post]);  
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('single-post', ['post' => $post]);
    }

    public function course_detail($id)
    {
        $course = Course::find($id);
        $all_course = Course::orderBy('id')->get();
        $batch_info = Batch_Info::orderBy('id')->get();
        return view('course_one', ['course' => $course, 'all_course'=>$all_course,'batch_info'=>$batch_info]);
    }

}
