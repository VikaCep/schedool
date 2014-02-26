@extends('layouts.scaffold')

@section('content')

<h4>All Lessons</h4>

<p>{{ link_to_route('lessons.create', 'Add new lesson') }}</p>

@if ($lessons->count())
	<table>
		<thead>
			<tr>
				<th>Weekday_id</th>
				<th>Subject_id</th>
				<th>Classtype_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($lessons as $lesson)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no lessons
@endif

@stop
