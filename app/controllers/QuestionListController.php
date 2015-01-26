<?php

class QuestionListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Questions::paginate(10);
		return View::make('sessions.questionlist')->with('questions',$questions);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		$questions = Questions::findOrFail($id);
		$choice = Choices::where('questions_id', '=', $id)
					->select('choice','flag')->get();
		
		return View::make('sessions.questionpreview')
					->with("questions", $questions)
					->with("choice", $choice)
					->with("questions_id", $id);
	}

	public function countChoices()
	{
		
		$id = Input::all();
		$numChoices = Choices::where('questions_id', '=' ,$id)->count();
		return Response::json(array('choiceCount' => 'count'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$id= Input::get('hidden'); 
		$question = Input::get('question');
			DB::table('questions')
								->where('id','=', $id)
								->update(array('questions'=>$question));
			return Redirect::route('questionlist.index');
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
