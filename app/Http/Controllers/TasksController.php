<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use App\Task;
use App\User;

use Request;

class TasksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
		$this->middleware('auth', ['except' => 'goLogin']);
	}

	public function index()
	{
		$user = \Auth::User();
		$tasks = Task::where('user_id', $user->id)->get()->sortByDesc('updated_at');
		$authorized = \Auth::check();
		return view('tasks.index', compact('tasks', 'authorized'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tasks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TaskRequest $request)
	{
		//Task::create($input);
		$taskNew = new Task($request->all());
		\Auth::user()->tasks()->save($taskNew);
		return redirect('tasks');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::find($id);
		if(\Auth::user()->id == $task['user_id']){
			return view('tasks.show', compact('task'));
		}else {
			return redirect('tasks');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::findOrFail($id);

		if(\Auth::user()->id == $task['user_id']){
			return view('tasks.edit', compact('task'));
		}else {
			return redirect('tasks');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, TaskRequest $request)
	{

		$task = Task::findOrFail($id);
		$task->update($request->all());
		return redirect('tasks');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		$task = Task::find($id);
		$task->delete();
		return redirect('tasks');
	}

	public function goLogin() {
		return redirect('auth.login');
	}

}
