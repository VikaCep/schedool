@extends("../layouts/scaffold_popup")


@section("content")
{{ Form::open([        
    'action' => array('AuthController@loginAction'),
    "autocomplete" => "off"
    ]) }}    
    <div class="row">
        <div class="large-12 columns">
         {{ Form::label("username", "Username") }}        
         {{ Form::text("username", Input::get("username"), ["placeholder" => "cleo.cat", 'parsley-required'=>'true' ]) }}
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
        {{ Form::label("password", "Password") }}
        {{ Form::password("password", [
            "placeholder" => "••••••••••",
            'parsley-required'=>'true',
            ]) }}        
        </div>
    </div>
    {{ Form::submit('Login', array('class' => 'button')) }}
    {{ Form::close() }}
    <a href="{{ URL::to('/password/remind') }}"><span class="hidden-tablet"> Forgot your password?</span></a>
    <a class="close-reveal-modal">&#215;</a>

@stop
