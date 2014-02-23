@extends('layouts.scaffold')

@section('content')

<h4>All Subjects</h4>

<p>{{ link_to_route('subjects.create', 'Add new subject') }}</p>

@if ($subjects->count())
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Year</th>
				<th>Has promotion</th>				
				<th>Exams</th>
				<th>Classes</th>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($subjects as $subject)
				<tr>
					<td>{{{ $subject->id }}}</td>
					<td>{{{ $subject->name }}}</td>
					<td>{{{ $subject->year }}}</td>
					<td>{{{ Helpers::yesOrNo($subject->has_promotion) }}}</td>										
					<td>{{ link_to_route('subjectExams.add', 'Add', array($subject->id), array('class' => 'button tiny add')) }}</td>
                    <td>{{ link_to_route('subjects.edit', 'Add', array($subject->id), array('class' => 'button tiny add')) }}</td>
                    <td>{{ link_to_route('subjects.edit', 'Edit', array($subject->id), array('class' => 'button tiny')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('subjects.destroy', $subject->id))) }}
                            {{ Form::submit('Delete', array('class' => 'button tiny alert')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no subjects
@endif

@stop
