<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct(){
        //This can be access by everyone except for index and show method.
        $this->middleware('auth')->except(['index', 'show' ]);
    }

	public function index(Posts $posts) {
//        dd($posts);
		// $posts = Posts::orderBy('created_at', 'desc')->get();
//        $posts = Posts::latest()
//                ->filter(request(['month', 'year']) )
//                ->get();
        $posts = $posts->all();
		return view('posts.index', compact('posts') );
    }


    public function show(Post $post) {

		return view('posts.show', compact('post') );
    }

    public function create() {

		return view('posts.create');
    }

    public function store() {

    	// Means validate request with this specific rules.
    	$this->validate(request(), [
    		'title' => 'required',
    		'body'	=> 'required'
    	]);

        auth()->user()->publish(
            new Post(request(['title', 'body' ]) 
        ));

    	//Create a new post using the request data . saving it to the database and then redirect.
		return redirect('/');

    }


}
