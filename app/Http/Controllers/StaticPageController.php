<?php

namespace App\Http\Controllers;
use App\Models\Customisation;
use App\Models\Post;
use App\Models\Course;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home()
    {
        $test = Testimonial::all();
        $Post = Post::orderBy('id')->get();
        $course =Course::orderBy('id')->get();
        $review_value = DB::table('review_ratings')->where('status','active')->get();
        return view('index',['posts'=>$Post, 'tests'=>$test,'course'=>$course,'review_rating' => $review_value]);
    }

    public function aboutUs()
    {
        $test = Testimonial::all();
        return view('about-us',['tests'=>$test]);
    }

    public function caseStudies()
    {
        return view('our-case-studies');
    }

    public function demo()
    {
        return view('blogpost');
    }



}
