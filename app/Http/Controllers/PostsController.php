<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Input;
use Redirect;
use Session;
use Validator;

class PostsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$posts = Post::all();

		return view('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {

		return view('posts/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		$file = array('image' => Input::file('image'));
		// setting up rules
		$rules = array('image' => 'required|image'); //mimes:jpeg,bmp,png and for max size max:10000
		// doing the validation, passing post data, rules and the messages
		$validator = Validator::make($file, $rules);
		if ($validator->fails()) {
			// send back to the page with the input data and errors
			return Redirect::to('posts/create')->withInput()->withErrors($validator);
		} else {
			// checking file is valid.
			if (Input::file('image')->isValid()) {
				$destinationPath = 'uploads'; // upload path
				$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				$fileName = rand(11111, 99999) . '.' . $extension; // renameing image
				Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
				// sending back with message
				Session::flash('success', 'Upload successfully');
				return Redirect::to('posts/create');

			} else {
				// sending back with error message.
				Session::flash('error', 'uploaded file is not valid');
				return Redirect::to('posts/create');
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}
}
