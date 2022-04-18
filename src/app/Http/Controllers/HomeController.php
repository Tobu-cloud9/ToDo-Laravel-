<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $category=Category::all();
        return view('home')->with(compact('category'));
    }

    public function makeFolder()
    {
        return view('makeFolder');
    }

    public function addFolder()
    {
        return view('addFolder');
    }

    public function storeFolder(Request $request){
        Category::create([
            'user_id'=>$request->user()->id,
            'category_name'=>$request->input('name'),
        ]);
//        return view('storeFolder');
        return redirect()->route('addFolder');
    }
}
