@extends('layouts.scaffold')

@section('content')

<h4>Create Lesson</h4>
{{ Form::open(array('route' => 'lessons.store')) }}
<div class="row">
    <div class="large-6 columns">
             <li>
            {{ Form::label('weekday_id', 'Weekday_id:') }}
            {{ Form::text('weekday_id') }}
        </li>

        <li>
            {{ Form::label('subject_id', 'Subject_id:') }}
            {{ Form::text('subject_id') }}
        </li>

        <li>
            {{ Form::label('classtype_id', 'Classtype_id:') }}
            {{ Form::text('classtype_id') }}
        </li>

 	</div>
</div>
<div class="row">
    <div class="large-6 columns">
      {{ Form::submit('Update', array('class' => 'button')) }}
  </div>
</div>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
