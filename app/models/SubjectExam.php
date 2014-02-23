<?php

class SubjectExam extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function subject()
    {
        return $this->belongsTo('Subject');
    }

    public static function create(array $attributes)
    {
    	$exam = new SubjectExam($attributes);            
		$subject = Subject::find($attributes['subject_id']);
		return $exam = $subject->exams()->save($exam);
    }
}
