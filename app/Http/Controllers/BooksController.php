<?php

namespace App\Http\Controllers;
use App\Book;
use App\Year;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index (Request $request)
    {
        $year= new Year;
        $years = $year->getYears();
        $year_id=$request->year_id;
        $searchWord=$request->searchWord;
        $books=Book::orderBy('id')
        ->yearAt($year_id)
        ->searchTitle($searchWord)
        ->get();

        return view('book.index',compact('books','years','year_id','searchWord'));
    }

    public function show(Request $request,$id)
    {
        $book=Book::findOrFail($id);
        $reviews=Review::where('book_id',$id)->paginate(3);
        //dd($reviews);
        $bookmark = $book->bookmarks()->where('user_id', Auth::user()->id)->first();

        return view('book.show',compact('book','bookmark','reviews'));
    }
}
