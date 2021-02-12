<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Review;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class ReviewsController extends Controller
{
    public function store(ReviewRequest $request)
    {

        $review = new Review;
        $review->review = $request->review;
        $review->star=$request->score;

        //dd($request->star);
        $review->book_id = $request->book_id;
        $review->user_id = Auth::user()->id;
        //dd($review);
        $review->save();



        return redirect()->route('book.show',[$request->book_id])->with('flash_message', 'レビューを投稿しました');
    }

    public function edit($id)
    {
        $review = Review::findorFail($id);
        return view('review.edit',compact('review'));
    }

    public function update(ReviewRequest $request,$id)
    {
        $review = Review::findorFail($id);
        $review->review=$request->review;
        $review->star=$request->score;

        $review->save();

        return redirect()->route('book.show',[$review->book_id])->with('flash_message', '編集完了しました');;
    }

    public function destroy($id)
    {
        $review = Review::findorFail($id);
        $review->delete();

        return redirect()->route('book.show',[$review->book_id])->with('flash_message', 'レビューを削除しました');;

    }
}
