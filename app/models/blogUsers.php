<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class blogUsers extends Authenticatable
{
    //
    
	protected $table = 'blog_users';
	
	protected $fillable = [
			'name', 'email', 'password',
	];
	
	protected $hidden = [
			'password', 'remember_token',
	];
}
