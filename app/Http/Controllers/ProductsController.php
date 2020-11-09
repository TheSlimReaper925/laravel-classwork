<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Auth;
use App\User;
use App\Posts;
use App\Comments;

class ProductsController extends Controller
{
	public function __construct()
    {
        // $this->middleware('auth');
    }
	
    public function index()
    {
    	return view('form');
    }

    public function store(Request $request)
    {
    	Products::create([
    		'user_id'=>Auth::user()->id,
    		'title'=>$request->input('title'),
    		'description'=>$request->input('description')
    	]);
    }

    public function edit($id)
    {
        $product = Products::where([['id', $id], ['user_id', Auth::user()->id]])->firstOrFail();
        return view('edit', ['product'=>$product]);
    }

    public function update(Request $request)
    {
        Products::where([['id', $request->input('id')], ['user_id', Auth::user()->id]])->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description')
        ]);
    }

    public function get_phone()
    {
        return User::with(['phone'])->first()['phone'];
    }

    public function PostsWithComments()
    {
        // return Comments::join('posts', 'post_id', 'posts.id')->get();
        // return Comments::withCount(['Post'])->get();
        return Posts::withCount(['comments'])->get();

    }


}
