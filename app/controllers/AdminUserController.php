<?php

class AdminUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate();

		return View::make('admin.user.index')->with('users', $users);

		//return $users;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed',
			'user_status' => 'required',
			'avatar' => 'image'
		]);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$fileName = null;
		if(Input::hasFile('avatar'))
		{
			$file = Input::file('avatar');
			$fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
			$file->move('uploads/avatar', $fileName);
		}

		$input = Input::all();
		$input['avatar'] = $fileName;
		$input['password'] = Hash::make(Input::get('password'));

		User::create($input);

		return Redirect::route('admin.user.index');
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
		$user = User::find($id);

		return View::make('admin.user.edit')->with('user', $user);
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
			'name' => 'required',
			'email' => 'required|email|unique:users,email,' . $id,
			'password' => 'required_with:password_confirmation|confirmed',
			'user_status' => 'required'
		]);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$input = Input::except('password', 'password_confirmation', '_token');

		if(Input::has('password'))
		{
			$input['password'] = Hash::make(Input::get('password'));
		}

		$user = User::find($id);

		$user->update($input);

		return Redirect::route('admin.user.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		
		$fileName = 'uploads/avatar/' . $user->avatar;

		if(File::exists($fileName))
		{
			File::delete($fileName);
		}

		$user->delete();

		return Redirect::route('admin.user.index');
	}


}
