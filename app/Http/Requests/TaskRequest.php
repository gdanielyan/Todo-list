<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::user();
	}

	/**whe request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required',
		];
	}

}
