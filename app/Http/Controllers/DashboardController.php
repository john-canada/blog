<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
// use DB;//optional;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        return view('Dashboard')->with('users',$user->posts);
    //     $posts = DB::table('users')
    //     ->leftJoin('posts','users.id', '=', 'posts.user_id')
    //     ->get();
    // return view('Dashboard')->with(['users'=>$posts]);
    }
}
