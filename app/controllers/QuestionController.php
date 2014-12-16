<?php

class QuestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getHome()
	{
		return View::make('layouts.home');
	}

	public function getQuestionTrial()
	{
		return View::make('sessions.questiontrial');
	}

	public function getQuestionPreview()
	{
		return View::make('sessions.questionpreview');
	}

	public function index()
	{
		return View::make('sessions.addquestion');
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

		$question = Questions::create([
			'questions' => Input::get('question'),
		]);

		//stores the id of the question for the foreign key of the choices table
		$questionId = $question->id;

		//Takes all inputs. Adds each choices within loop.
		//checks checkboxes if checked/unchecked via key-value pair
		$inputs = Input::all();
		foreach($inputs['choice'] as $k => $v)
		{
			
			$choice = new Choices;
			$choice->choice = $v;
			if(isset($inputs['flag'][$k]))
			{
				$choice->flag = 1;
			}
			$choice->questions_id = $questionId;
			$choice->save();	
				
		}

		return Redirect::route('addquestion.index');
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
	public function destroy($id)
	{
		//
	}


}
