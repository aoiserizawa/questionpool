<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
  //Log in
	public function create()
	{
		return View::make('sessions.create');
	}
  //In case user forgots password
	public function forgotpassword()
	{
		return View::make('sessions.forgotpass');
	}
  //Change User Password
		public function changepassword()
	{
		return View::make('sessions.changepass');
	}
  //Register a user
	public function registeruser()
	{
		return View::make('sessions.register');
	}
  //Settings for the user
  public function usersettings()
  {
    return View::make('sessions.usersettings');
  }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();



    return Redirect::home()->with('flash_message', 'You have been logged out');
	}


}
