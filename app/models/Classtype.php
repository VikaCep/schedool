<?php

class Classtype extends Eloquent {
	protected $guarded = array();

	public static $rules = array();       
	
	public function subjectClasses()
    {
        return $this->belongsToMany('SubjectClass');
    }
}
