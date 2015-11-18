@extends('app')

@section('content')
	@if($authorized)
		<div class="row" id="list">
			<div class="col-sm-8 col-xs-10 inner-content col-sm-offset-2 col-xs-offset-1 box-shadow">
				<div class="row tasks-header">
					<div class="tasks-link">
						<h1>Task List</h1>
					</div>
				</div>
				<div class="row notepad-yellow" id="task-list">
					@foreach ($tasks as $task)
						<div class="task">
							<div class="pull-left">
								<div class="task-title">
									<h4><a  href="{{ action('TasksController@show', [$task->id]) }}">{{ $task ->title }}</a></h4>
								</div>
								<div class="taskBody">
									<p>{{ $task -> body}} </p>
								</div>
							</div>
							<div class=" buttons pull-right"> 
								<div class="pull-right">
									{!! Form::open([
					                       'method' => 'DELETE',
					                       'route' => ['tasks.destroy', $task->id]
					                ]) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-md btn-danger']) !!}
									{!! Form::close() !!}
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					@endforeach
					<div class="addTask">
						<h3>Add a new task<a href="{{ action('TasksController@create') }}" data-toggle="tooltip" title="Add a task!"><span class="glyphicon glyphicon-plus"></span></a></h3>
					</div>
				</div>
			</div>
		</div>
	@else
		<h1><a href="{{ action('TasksController@goLogin') }}">Login</a> to create a task list!</h1>
	@endif
@stop