<?php

class AdminMessageController extends \BaseController {

	/*public function __construct()
	{
		$this->beforeFilter('auth');
	}*/

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$messages = Message::with('category')->paginate();

		return View::make('admin.message.index')
			->with('messages', $messages);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::lists('title', 'id');

		return View::make('admin.message.create')
			->with('categories', $categories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required',
			'message_content' => 'required',
			'message_status' => 'required'
		]);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$input = Input::all();
		$input['slug'] = Str::slug(Input::get('title')); // Add new key into existing array
		// unset($input['slug']); // If you want to remove any array key

		Message::create($input);

		return Redirect::route('admin.message.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$categories = Category::lists('title', 'id');
		$message = Message::find($id);

		return View::make('admin.message.edit')
			->with('categories', $categories)
			->with('message', $message);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required',
			'message_content' => 'required',
			'message_status' => 'required'
		]);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$message = Message::find($id);

		$input = Input::all();
		$input['slug'] = Str::slug(Input::get('title'));

		$message->update($input);

		return Redirect::route('admin.message.index');


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$message = Message::find($id);

		$message->forceDelete();

		return Redirect::route('admin.message.index');


	}


}
