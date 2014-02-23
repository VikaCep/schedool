@extends("../layouts/scaffold")
@section("content")
{{ Form::open(array('action' => array('RemindersController@postRemind'))) }}
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::submit('Submit',array('class' => 'button')) }}</p>
 
{{ Form::close() }}
@stop
