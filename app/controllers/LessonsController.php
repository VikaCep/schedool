<?php

class LessonsController extends BaseController {

	/**
	 * Lesson Repository
	 *
	 * @var Lesson
	 */
	protected $lesson;

	public function __construct(Lesson $lesson)
	{
		$this->lesson = $lesson;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lessons = $this->lesson->all();

		return View::make('lessons.index', compact('lessons'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('lessons.create');
	}


	public function add($subject_id)
	{
		$subject = Subject::findOrFail($subject_id);
		return View::make('lessons.create',compact('subject'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Lesson::$rules);

		if ($validation->passes())
		{
			$this->lesson->create($input);

			return Redirect::route('lessons.index');
		}

		return Redirect::route('lessons.create')
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
		$lesson = $this->lesson->findOrFail($id);

		return View::make('lessons.show', compact('lesson'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lesson = $this->lesson->find($id);

		if (is_null($lesson))
		{
			return Redirect::route('lessons.index');
		}

		return View::make('lessons.edit', compact('lesson'));
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
		$validation = Validator::make($input, Lesson::$rules);

		if ($validation->passes())
		{
			$lesson = $this->lesson->find($id);
			$lesson->update($input);

			return Redirect::route('lessons.show', $id);
		}

		return Redirect::route('lessons.edit', $id)
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
		$this->lesson->find($id)->delete();

		return Redirect::route('lessons.index');
	}

}
