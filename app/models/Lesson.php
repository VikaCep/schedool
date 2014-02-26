<?php

class Lesson extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'weekday_id' => 'required',
		'subject_id' => 'required',
		'classtype_id' => 'required'
	);

	public function classType()
    {
        return $this->hasOne('Classtype');
    }

    public function weekdays()
    {
        return $this->hasMany('Weekday');
    }

    public function subject()
    {
        return $this->belongsTo('Subject');
    }

}
