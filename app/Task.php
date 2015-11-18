<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	// You can explicity specify what table to use 
	// If not, then Eloquent assumes that Task uses 'tasks' table
	protected $table = 'tasks';

	protected $fillable = [
		'title',
		'body',
		'user_id'
	];

	public function user(){

		return $this->belongsTo('App\User');
	}
}
