<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		//
		return View::make('users.register');
	}
	public function settings()
	{
		return View::make('users.usersettings');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//store input of the registering user

			
			$rule=array('email' => 'required|unique:users,email', 'password' => 'required', 'retypepassword'=>'required|same:password');
			$validator= Validator::make(Input::all(),$rule);
				if ($validator->fails()) {
					$messages = $validator->messages();
					return Redirect::route('user.create')->withErrors($validator);
				}else{
					$userdata = Input::only(['email', 'password']);
					$userdata['password'] = Hash:: make($userdata['password']);
					$newUser = User::create($userdata);	
					return Redirect::to('loginpage');

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
	public function update()
	{
		//update user account

		$rule=array('email' => 'required', 'currentpassword' => 'required','newpassword' => 'required', 'retypepassword'=>'required|same:newpassword');
			$validator= Validator::make(Input::all(),$rule);
				if ($validator->passes()) {
						$userdata = Input::only(['email', 'newpassword','currentpassword']);
						$userdata['newpassword'] = Hash::make($userdata['newpassword']);
						

					if(Hash::check($userdata['currentpassword'], Auth::user()->password))
						{
							DB::table('users')
								->where('email',Auth::user()->email)
								->update(array('email'=>$userdata['email'], 'password'=>$userdata['newpassword']));
						}
						else
							echo 'Does not match in database';				
				}
				else{
					$messages = $validator->messages();
					return Redirect::to('usersettings')->withErrors($validator);
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
		//
	}


}
