<?php

class SubjectClass extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function classType()
    {
        return $this->hasOne('Classtype');
    }

    public function weekdays()
    {
        return $this->belongsTo('Weekday');
    }

    public function subject()
    {
        return $this->belongsTo('Subject');
    }

}
