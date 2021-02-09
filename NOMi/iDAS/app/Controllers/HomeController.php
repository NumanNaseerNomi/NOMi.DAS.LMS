<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		echo view('components/headerView'); echo md5("NOMi"); echo("<br/>"); echo password_hash("NOMi", PASSWORD_DEFAULT);
	//	echo view('components/login');
		echo view('components/footerView');
	}
}
