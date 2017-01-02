<?php

namespace App\Http\Controllers\blogAuth;
use App\Http\Controllers\Controller;

class AuthController extends Controller {
	
	protected $redirectTo = 'blog';
	protected $guard = 'blog';
	
	public function showLoginForm(){
		return view('auth.login');
	}
	
	public function showRegistrationForm(){
		return view('auth.register');
	}
	
	protected function create(array $data)
	{
		return blogUser::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'password' => bcrypt($data['password']),
		]);
	}
}