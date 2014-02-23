@extends("../layouts/scaffold")


@section("content")
    <h4>Hello {{ Auth::user()->username }}</h4>
    <p>Welcome to your sparse profile page.</p>
@stop