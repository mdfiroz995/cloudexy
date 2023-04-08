<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewRating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function reviewstore(Request $request)
    {
        if(Auth::guard('front')->user()){
            $review = new ReviewRating();
            $review->comments = $request->comment;
            $review->star_rating = $request->rating;
            $review->user_id = Auth::guard('front')->user()->id;
            $review->user_name = Auth::guard('front')->user()->name;
            $review->status = 'active';
            $review->save();
            return redirect()->back()->with('success', 'Your review has been submitted Successfully,');
        }else{
            return redirect()->back()->with('warning', 'User Not Logged In');
        }

    }

    public function show()
    {
        $value = DB::table('review_ratings')->where('status','active')->get();
        return view('rating', compact('value'));
    }
}
