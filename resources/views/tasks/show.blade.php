@extends('app')

@section('content')

	<div class="row">
		<div class="col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1 notepad-yellow box-shadow">
			<h3 class="titleText">{{ $task->title}}</h3>
			<p class="bodyText">{{ $task->body}}</p>
			<a type="button" class="pull-right btn btn-md btn-primary " href="{{ action('TasksController@edit', [$task->id]) }}">Edit</a>
		</div>
	</div>
@stop