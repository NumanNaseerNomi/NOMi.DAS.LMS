<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('components/header');
	//	echo view('components/login');
		echo view('components/footer');
	}
}
