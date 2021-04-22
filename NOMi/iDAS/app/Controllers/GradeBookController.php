<?php namespace App\Controllers;

use App\Models\UserRolesModel;

class GradeBookController extends BaseController
{
	public function index()
	{
		$userRolesModel	= new UserRolesModel();
		$userRoleName	= $userRolesModel->getUserRoleName($this->session->iDASUser->userRoleID); //dd($userRoleName);

		//public $iDASData = [];

		//$userRoleID = 1;
		//$this->session->iDASUser->userRoleID;

		switch (strtolower($userRoleName))
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
