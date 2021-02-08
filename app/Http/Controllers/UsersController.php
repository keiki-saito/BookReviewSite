<?php

namespace App\Http\Controllers;
use App\User;
use App\BookMark;
use App\Book;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($user_id)
    {
        $user = User::where('id', $user_id)
            ->firstOrFail();
        $books=Book::all();
         // テンプレート「user/show.blade.php」を表示します。
        return view('user/show', compact('user','books'));
    }
}
