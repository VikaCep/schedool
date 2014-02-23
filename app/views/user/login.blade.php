@extends("../layouts/scaffold")


@section("content")
    {{ Form::open([        
        'action' => array('AuthController@loginAction'),
        "autocomplete" => "off"
    ]) }}    
        {{ Form::label("username", "Username") }}
        {{ Form::text("username", Input::get("username"), [
            "placeholder" => "cleo.cat"
        ]) }}
        {{ Form::label("password", "Password") }}
        {{ Form::password("password", [
            "placeholder" => "••••••••••"
        ]) }}        
        {{ Form::submit('Login', array('class' => 'button')) }}
    {{ Form::close() }}
     <a href="{{ URL::to('/password/remind') }}"><span class="hidden-tablet"> Forgot your password?</span></a>
@stop
