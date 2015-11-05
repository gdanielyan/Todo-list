@extends('app')

@section('content')

	<div class="row">
		<div class="col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1 tasks-list">
			<h3 class="titleText">{{ $task->title}}</h3>
			<p class="bodyText">{{ $task->body}}</p>
			<a type="button" class="pull-right btn btn-md btn-primary " href="{{ action('TasksController@edit', [$task->id]) }}">Edit</a>
		</div>
	</div>
{{-- 	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-1">
			<div class="pull-right">
				<div class="pull-left">
					<a type="button" class="btn btn-sm btn-primary " href="{{ action('TasksController@edit', [$task->id]) }}">Edit</a>
				</div>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pull-left">
				{!! Form::open([
                       'method' => 'DELETE',
                       'route' => ['tasks.destroy', $task->id]
                ]) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
				{!! Form::close() !!}
			</div>
		</div>
		<div class="col-md-5"></div>
	</div> --}}
@stop