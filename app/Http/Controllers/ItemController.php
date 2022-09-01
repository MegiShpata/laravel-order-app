<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$posts = Post::all();

        $items = Item::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('multiplecheckboxfor',compact('items'));
    }

    public function create()
    {
        return view('multiplecheckbox');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['name'] = $request->input('name');

        Item::create($input);
        return back()->with('success','Order created');
    }

    public function showData ()
    {
            $items = Item::all();
            return view('show', compact('items'));
    }

}
