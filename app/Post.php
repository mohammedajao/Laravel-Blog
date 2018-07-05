<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // To change Table Name
    // protected $table = 'posts'; 

    // Primary Key Field - id is the default
    // public $primaryKey = 'id';

	// We can set the timestamp as well for created at or updated
	// public $timestamps = true;

	public function user() {
		// States a post belongs to a user and has a relationship with them
		return $this->belongsTo('App\User');
	}
}
