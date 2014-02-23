@extends('layouts.scaffold')

@section('content')

<h4>Edit SubjectExam</h4>
{{ Form::model($subjectExam, array('method' => 'PATCH', 'route' => array('subjectExams.update', $subjectExam->id))) }}
<div class="row">
    <div class="large-6 columns">
             <li>
            {{ Form::label('subject_id', 'Subject_id:') }}
            {{ Form::text('subject_id') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('date', 'Date:') }}
            {{ Form::text('date') }}
        </li>

        <li>
            {{ Form::label('comment', 'Comment:') }}
            {{ Form::textarea('comment') }}
        </li>

 	</div>
</div>
<div class="row">
    <div class="large-6 columns">
      {{ Form::submit('Update', array('class' => 'button')) }}
      {{ link_to_route('subjectExams.show', 'Cancel', $subjectExam->id, array('class' => 'button alert')) }}
  </div>
</div>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
