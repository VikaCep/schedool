@extends('layouts.scaffold')

@section('content')

<h4>Show Lesson</h4>

<p>{{ link_to_route('lessons.index', 'Return to all lessons') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Weekday_id</th>
				<th>Subject_id</th>
				<th>Classtype_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $lesson->weekday_id }}}</td>
					<td>{{{ $lesson->subject_id }}}</td>
					<td>{{{ $lesson->classtype_id }}}</td>
                    <td>{{ link_to_route('lessons.edit', 'Edit', array($lesson->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('lessons.destroy', $lesson->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
