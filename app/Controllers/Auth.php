<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
	public function __construct()
	{
		helper('form');
	}

	public function register()
	{
		return view('register');
	}

	public function login()
	{
		return view('login');
	}

	public function logout()
	{

	}
}