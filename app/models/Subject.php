<?php

class Subject extends Eloquent {
	protected $guarded = array();

    public static $rules = array(
        'name' => 'required|min:3',
        'year'  => 'required',        
    );

    //used to register events
    public static function boot()
    {
        parent::boot();
        Subject::creating(function($model)
        {
            $model->user_id = Auth::user()->id;
            return true;            
        });
    }

    public function exams()
    {
        return $this->hasMany('SubjectExam');
    }

	public function classes()
    {
        return $this->hasMany('SubjectClass');
    }


    public static function all($columns = array('*'))
    {     
        return Subject::where('user_id', '=', Auth::user()->id)->get();           
    } 

}