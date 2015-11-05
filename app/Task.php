<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $fillable = [
		'title',
		'body',
		'user_id'
	];

	protected $dates = ['published_at'];

	public function user(){

		return $this->belongsTo('App\User');
	}
}
