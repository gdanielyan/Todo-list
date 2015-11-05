@extends('app')

@section('content')
	<div class="col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1 tasks-list">
		<h3 class="titleText">Edit: {!! $task->title !!}</h3>
		{!! Form::model($task, ['method' => 'PATCH', 'action' => ['TasksController@update', $task->id]]) !!}
			@include('tasks.form', ['submitButtonText' => 'Update Task'])		
		{!! Form::close() !!}
	</div>
@stop