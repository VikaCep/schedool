@extends('layouts.scaffold')

@section('content')

<h4>Edit Subject</h4>
{{ Form::model($subject, array('method' => 'PATCH', 'route' => array('subjects.update', $subject->id))) }}
<div class="row">
    <div class="large-6 columns">
     {{ Form::label('name', 'Name:') }}
     {{ Form::text('name',Input::old('name'),array('id'=>'name','parsley-required'=>'true')) }}     
 </div>
</div>
<div class="row">
    <div class="large-6 columns">
      {{ Form::label('year', 'Year:') }}
      {{ Form::text('year',Input::old('year'),array('parsley-regexp'=>'^(19|20)\d{2}$','parsley-required'=>'true')) }}
  </div>
</div>
<div class="row">
    <div class="large-6 columns">
      {{ Form::label('has_promotion', 'Has promotion:') }}
      {{ Form::checkbox('has_promotion') }}
  </div>
</div>
<div class="row">
    <div class="large-6 columns">
      {{ Form::submit('Update', array('class' => 'button')) }}
      {{ link_to_route('subjects.show', 'Cancel', $subject->id, array('class' => 'button alert')) }}
  </div>
</div>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
