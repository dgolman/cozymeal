<?php

class MealsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$meals = Meal::all();

        return View::make('meals.index', compact('meals'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('meals.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    $input = Input::all();
        $validation = Validator::make($input, Meal::$rules);

        if ($validation->passes())
        {
            Meal::create($input);

            return Redirect::route('meals.index');
        }

        return Redirect::route('meals.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$meal = Meal::findOrFail($id);
 
    	return View::make('meals.show', compact('meal'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$meal = Meal::findOrFail($id);
 
    	return View::make('meals.edit', compact('meal'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$meal = Meal::findOrFail($id);
		$input = Input::all();
        $validation = Validator::make($input, Meal::$rules);

        if ($validation->passes())
        {
            $meal->fill($input)->save();

            return Redirect::route('meals.index');
        }

        return Redirect::route('meals.edit')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$meal = Meal::findOrFail($id);
		
		$meal->delete();

		Session::flash('flash_message', 'Meal successfully deleted!');

        return Redirect::route('meals.index');

	}


}
