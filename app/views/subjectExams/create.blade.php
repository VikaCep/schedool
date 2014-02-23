@extends('layouts.scaffold')

@section('content')

<h4>Add exam for {{$subject->name}}</h4>
{{ Form::open(array('route' => 'subjectExams.store')) }}
{{ Form::hidden('subject_id',$subject->id) }}   
<div class="row">
    <div class="large-6 columns">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name',Input::old('name'),array('parsley-required'=>'true')) }}
    </div>
</div>
<div class="row">
    <div class="large-6 columns">
        {{ Form::label('date', 'Date:') }} 
        <div class="input-append date">          
          {{ Form::text('date',Input::old('date'),array('class'=>'span2 datepicker','data-date-format'=>"dd/mm/yyyy",'parsley-required'=>'true')) }}
          <span class="add-on"><i class="icon-th"></i></span>
        </div>                           
    </div>
</div>

<div class="row">
    <div class="large-6 columns">    
        {{ Form::label('comment', 'Comment:') }}
        {{ Form::textarea('comment') }}
    </div>
</div>
<div class="row">
    <div class="large-6 columns">
      {{ Form::submit('Create', array('class' => 'button')) }}
  </div>
</div>
{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
