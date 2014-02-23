<?php

class SubjectsController extends BaseController {

	/**
	 * Subject Repository
	 *
	 * @var Subject
	 */
	protected $subject;

	public function __construct(Subject $subject)
	{
		$this->subject = $subject;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subjects = $this->subject->all();

		return View::make('subjects.index', compact('subjects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('subjects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Subject::$rules);

		if ($validation->passes())
		{
			$this->subject->create($input);

			return Redirect::route('subjects.index');
		}

		return Redirect::route('subjects.create')
			->withInput()
			->withErrors($validation)
			->with('flash_warning', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$subject = $this->subject->findOrFail($id);

		return View::make('subjects.show', compact('subject'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subject = $this->subject->find($id);

		if (is_null($subject))
		{
			return Redirect::route('subjects.index');
		}

		return View::make('subjects.edit', compact('subject'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Subject::$rules);

		if ($validation->passes())
		{
			$subject = $this->subject->find($id);
			$subject->update($input);

			return Redirect::route('subjects.show', $id);
		}

		return Redirect::route('subjects.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('flash_warning', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->subject->find($id)->delete();

		return Redirect::route('subjects.index');
	}

}
