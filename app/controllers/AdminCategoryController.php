<?php

class AdminCategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$categories = Category::get();
		$categories = Category::with('messages')->paginate(50);

		return View::make('admin.category.index')
			->with('categories', $categories);
	}

	public function trash()
	{
		//$categories = Category::get();
		$categories = Category::onlyTrashed()->paginate();

		return View::make('admin.category.trash')
			->with('categories', $categories);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.category.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'title' => 'required|unique:categories',
			'category_status' => 'required'
		]);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		Category::create([
			'title' => Input::get('title'),
			'slug' => Str::slug(Input::get('title')),
			'meta_description' => Input::get('meta_description'),
			'meta_keywords' => Input::get('meta_keywords'),
			'category_status' => Input::get('category_status')
		]);

		return Redirect::route('admin.category.index');
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
		$category = Category::find($id);

		return View::make('admin.category.edit')
			->with('category', $category);
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
			'title' => 'required|unique:categories,title,' . $id,
			'category_status' => 'required'
		]);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$category = Category::find($id);

		$category->update([
			'title' => Input::get('title'),
			'slug' => Str::slug(Input::get('title')),
			'meta_description' => Input::get('meta_description'),
			'meta_keywords' => Input::get('meta_keywords'),
			'category_status' => Input::get('category_status')
		]);

		return Redirect::route('admin.category.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = Category::find($id);

		$category->delete();

		return Redirect::route('admin.category.index');
	}

	public function restore($id)
	{
		$category = Category::onlyTrashed()->find($id);

		$category->restore();

		return Redirect::route('admin.category.trash');
	}

	public function force($id)
	{
		$category = Category::onlyTrashed()->find($id);	

		DB::beginTransaction();

		try {

			$category->forceDelete();
			// $category->messages()->forceDelete();

			DB::commit();
		}
		catch (\Exception $ex) {
			DB::rollback();
			return Redirect::back()->withErrors($ex->getMessage());
		}

		return Redirect::route('admin.category.trash');
	}


}
