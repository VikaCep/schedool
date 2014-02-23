@extends('layouts.scaffold')

@section('content')

<h4>Show SubjectExam</h4>

<p>{{ link_to_route('subjectExams.index', 'Return to all subjectExams') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Subject_id</th>
				<th>Name</th>
				<th>Date</th>
				<th>Comment</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $subjectExam->subject_id }}}</td>
					<td>{{{ $subjectExam->name }}}</td>
					<td>{{{ $subjectExam->date }}}</td>
					<td>{{{ $subjectExam->comment }}}</td>
                    <td>{{ link_to_route('subjectExams.edit', 'Edit', array($subjectExam->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('subjectExams.destroy', $subjectExam->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
