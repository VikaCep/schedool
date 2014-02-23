<?php

class SubjectExamsController extends BaseController {

	/**
	 * SubjectExam Repository
	 *
	 * @var SubjectExam
	 */
	protected $subjectExam;

	public function __construct(SubjectExam $subjectExam)
	{
		$this->subjectExam = $subjectExam;
	}

	public static $rules = array(
        'name' => 'required|min:3',
        'date'  => 'required',        
    );

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subjectExams = $this->subjectExam->all();

		return View::make('subjectExams.index', compact('subjectExams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('subjectExams.create');
	}

	public function add($subject_id)
	{
		$subject = Subject::findOrFail($subject_id);
		return View::make('subjectExams.create',compact('subject'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, SubjectExam::$rules);

		if ($validation->passes())
		{
			$this->subjectExam->create($input);

			return Redirect::route('subjectExams.index');
		}

		return Redirect::route('subjectExams.create')
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
		$subjectExam = $this->subjectExam->findOrFail($id);

		return View::make('subjectExams.show', compact('subjectExam'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subjectExam = $this->subjectExam->find($id);

		if (is_null($subjectExam))
		{
			return Redirect::route('subjectExams.index');
		}

		return View::make('subjectExams.edit', compact('subjectExam'));
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
		$validation = Validator::make($input, SubjectExam::$rules);

		if ($validation->passes())
		{
			$subjectExam = $this->subjectExam->find($id);
			$subjectExam->update($input);

			return Redirect::route('subjectExams.show', $id);
		}

		return Redirect::route('subjectExams.edit', $id)
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
		$this->subjectExam->find($id)->delete();

		return Redirect::route('subjectExams.index');
	}

}
