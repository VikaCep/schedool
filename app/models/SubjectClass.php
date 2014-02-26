<?php

class SubjectClass extends Eloquent {
	protected $guarded = array();
    protected $table = 'subject_classes';    

	public static $rules = array();

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
