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
	public function create()
	{
		//
				return View::make('sessions.login');	
	}
	public function redirectloggedinuser()
	{
		//
				return View::make('sessions.questionlist');	
	}

/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
 	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 
		$rule=array('email'=>'required', 'password'=>'required');
		$validator= Validator::make(Input::all(),$rule);
		if($validator->fails()){
				return Redirect::to('login/create')->withErrors($validator);
		}
		else{
					$data = Input::only(['email', 'password']);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
     			return Redirect::to('/');       
        }
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
		Session::flush();
		return Redirect::to('login/create')->with('flash_message', 'You have been logged out');
	}


}
