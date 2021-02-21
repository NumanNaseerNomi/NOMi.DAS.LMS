<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		//public $iDASData = [];

		//$userRoleID = 1;
		//$this->session->iDASUser->userRoleID;

		switch ($this->session->iDASUser->userRoleID)
		{
			case 1:	//	Student
			{
				echo view('components/headerView');
				echo view('components/subjectCardView');
				echo "u r a student";
				echo view('components/footerView');
				break;
			}
			case 2:
			{
				echo view('components/headerView');
				echo "u r a Teacher";
				echo view('components/footerView');
				break;
			}
			default:
			{
				echo view('components/headerView');
				echo "u r a Guest";
				echo view('components/footerView');
				break;
			}
		}
	}
}
