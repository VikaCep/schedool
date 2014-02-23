@extends('layouts.scaffold')

@section('content')

<h4>Show subject {{{ $subject->name }}}</h4>

<p>{{ link_to_route('subjects.index', 'Return to all subjects') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Has promotion</th>
			<th></th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $subject->name }}}</td>
					<td>{{{ $subject->year }}}</td>
					<td>{{{ Helpers::yesOrNo($subject->has_promotion) }}}</td>
                    <td>{{ link_to_route('subjects.edit', 'Edit', array($subject->id), array('class' => 'button tiny')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('subjects.destroy', $subject->id))) }}
                            {{ Form::submit('Delete', array('class' => 'button tiny alert')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
