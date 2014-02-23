@extends('layouts.scaffold')

@section('content')

<h4>Create Subject</h4>

@if ($errors->any())   
    @section('warning') 
    @parent    
        {{ implode('', $errors->all('<div>:message</div>')) }}            
    @stop
@endif

{{ Form::open(array('route' => 'subjects.store')) }}
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
      {{ Form::submit('Create', array('class' => 'button')) }}      
  </div>
</div>
{{ Form::close() }}

@stop

@section('scripts')
    @parent
    {{HTML::script("/js/subjects/subjects.js")}}   
@stop
