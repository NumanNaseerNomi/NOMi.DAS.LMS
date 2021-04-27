<?php namespace App\Controllers;

use App\Models\UserRolesModel;

class GradeBookController extends BaseController
{
	public function index()
	{
		$userRolesModel	= new UserRolesModel();
		$userRole	= $userRolesModel->getUserRole($this->session->iDASUser->userRoleId);

		//public $iDASData = [];

		//$userRoleId = 1;
		//$this->session->iDASUser->userRoleId;

		switch (strtolower($userRole->role))
		{
			case "student":	//	Student Home Page
			{
				echo view('components/HeaderView');
				echo view('components/GradeBookView');
				echo view('components/FooterView');
				break;
			}
			case "parent": // Parents Home Page
			{
				echo view('components/HeaderView');
				echo "u r a Parent";
				echo view('components/FooterView');
				break;
			}
			case "staff": // Staff Home Page
			{
				echo view('components/HeaderView');
				echo "u r a Staff";
				echo view('components/FooterView');
				break;
			}
			default:
			{
				echo view('components/HeaderView');
				echo "u r a Guest";
				echo view('components/FooterView');
				break;
			}
		}
	}
}
