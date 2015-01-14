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
	public function forgotpass()
	{
		return View::make('sessions.forgotpass');
	}
	public function retrievepass()
	{
		//retrieve password

		$validator= Validator::make(Input::all(),
			array(
				'email'=>'required|email'
			)
		);
			if ($validator->fails()) {

				return Redirect::to('forgotpass')
					->withErrors($validator)
					->withInput();
			}else{
				//validate email if it exist
				$user = User::where('email','=', Input::get('email'));
				if($user->count()){
					$user = $user->first();

					//generate new code and password
					$code = str_random(60);
					$password = str_random(60);

					$user->code = $code;
					$user->password_temp= Hash::make($password);

					if ($user->save()) {
						Mail::send('sessions.email',array('url'=> URL::route('account-recover',$code),'password'=>$password), function($message) use($user)
						{
								$message->to($user->email)->subject('Your new password');
						});

						return Redirect::to('/')
								->with('global','We have sent you a new password via email');
						;						
					}
				}

			}
			return Redirect::to('forgotpass')
						->with('global', 'Could not request new password');		
		}
		public function getRecover($code){
			$user = User::where('code','=',$code)
						->where('password_temp','!=','');

						if($user->count()){

								$user = $user->first();
							$user->password = $user->password_temp;
							$user->password_temp = '';
							$user->code = '';

							if ($user->save()) {
								return Redirect::to('/')
									->with('global', 'Your account has been reset, you can sign-in with your new password provided');
							}
						}


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
								
					
							return Redirect::to('usersettings')->withErrors("Incorrect current password!");
									

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
