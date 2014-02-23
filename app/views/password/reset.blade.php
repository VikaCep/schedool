@extends("../layouts/scaffold")
@section("content")
 
{{ Form::open(array('action' => array('RemindersController@postReset'))) }}
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::label('password', 'Password') }}
  {{ Form::password('password') }}</p>
 
  <p>{{ Form::label('password_confirmation', 'Password confirm') }}
  {{ Form::password('password_confirmation') }}</p>
 
  {{ Form::hidden('token', $token) }}
 
  <p>{{ Form::submit('Submit',array('class' => 'button')) }}</p>
 
{{ Form::close() }}
@stop
