@extends('app')

@section('content')

	<div class="col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1 tasks-list">
		<h1>Write a new task</h1>
		{!! Form::open(['url' => 'tasks']) !!}
		@include ('tasks.form', ['submitButtonText' => 'Add Task'])
		{!! Form::close() !!}
	</div>
@stop