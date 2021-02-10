<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function store(Request $request)
    {
        
        $review = new Review;
        $review->review = $request->review;
        $review->star=$request->score;

        //dd($request->star);
        $review->book_id = $request->book_id;
        $review->user_id = Auth::user()->id;
        $review->save();



        return redirect()->route('book.show',[$request->book_id])->with('reviewstatus', 'レビューを投稿しました');
    }
}
