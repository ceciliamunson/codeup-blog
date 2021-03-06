<?php

class PostsController extends BaseController {

	public function __construct()
	{
		//include parent constructor
		parent::__construct();

		// Run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);

		// Run post protect filter to make sure users can only manage their own posts
		$this->beforeFilter('post.protect', ['only' => ['edit', 'update', 'destroy']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//show lists of all posts
		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');
		if (is_null($search)) {
			$posts = $query->paginate(4);
		} 
		else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(4);
		}
		return View::make('posts.index')->with(array('posts' => $posts));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create-edit')->with('posts', new Post());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

    	// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
    		Session::flash('errorMessage', 'Post could not be created');
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}

    	else
    	{
    		// validation succeeded, create and save the post
			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
    		$purifier = new HTMLPurifier();
    		$clean_html = $purifier->purify(Input::get('body'));
			$post->body = $clean_html;
			if (Input::hasFile('image'))
			{
				$image = Input::file('image');
				$post->image_path = Post::upload_image($image);
			}
			$post->save();
			Session::flash('successMessage', 'Post created succesfully');
			return Redirect::action('PostsController@index');
		}
	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.create-edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
			Session::flash('errorMessage', 'Post could not be updated');
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}

    	else
    	{
    		// validation succeeded, create and save the post
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			if (Input::hasFile('image'))
			{
				$post->image_path = Post::upload_image(Input::file('image'));
			}
			$post->save();
			Session::flash('successMessage', 'Post updated succesfully');
			return Redirect::action('PostsController@show', $post->id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::findOrFail($id)->delete();

		return Redirect::action('PostsController@index');
	}

}