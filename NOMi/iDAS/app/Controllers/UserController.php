<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\UserCandidatesModel;
use App\Models\StudentsModel;
use App\Models\StaffModel;
use App\Models\ParentsModel;

use App\Models\UserRolesModel;

class UserController extends BaseController
{
	public $iDASData = [];
	
	public function index()
	{
		echo view('components/HeaderView');

		echo view('components/FooterView');
	}

	public function login()
	{

		if ($this->request->getMethod() == 'post')
		{
			if (! $this->validate(
				[
					'userName'		=> ['label' => 'User Name', 'rules' => 'required'],
    				'userPinCode'	=> ['label' => 'User Pin Code', 'rules' => 'required|numeric|exact_length[6]']
				]))
	        {
	        	$validationErrors = (Object)$this->validator->getErrors();
	        	return redirect()->back();
	        }
	        else
	        {
	        	$usersModel	= new UsersModel();
				$user		= $usersModel->login((object)$this->request->getPost());

				if ($user)
				{
					$this->headerInfo($user);
					$this->session->setFlashData('success', 'Logged In Successfully..!');
					return redirect()->to(base_url('/'));
				}
				else
				{
					$this->session->setFlashData('danger', 'Incorrect User Name or Password..!');
					return redirect()->back();
				}
	        }
		}
		echo view('components/HeaderView');
		echo view('LoginView');
		// echo password_hash("123456", PASSWORD_DEFAULT);
		echo view('components/FooterView');
	}

	public function logout()
	{
		$this->session->remove('iDASUser');
		$this->session->setFlashData('success', 'Logged Out Successfully..!');
		return redirect()->to(base_url('Login'));
	}

	private function headerInfo($user)
	{
		$userCandidatesModel	= new UserCandidatesModel();
		$userCandidate			= $userCandidatesModel->getUserCandidateById($user->userCandidateId);

		if ($userCandidate)
		{
			if ($userCandidate->staffId != null)
			{
				$staffModel	= new StaffModel();
				$staff		= $staffModel->getStaffById($userCandidate->staffId);
				$name		= $staff->name;
			}
			else if ($userCandidate->studentsId != null)
			{
				$studentsModel	= new StudentsModel();
				$student		= $studentsModel->getStudentById($userCandidate->studentsId);
				$name			= $student->name;
			}
			else if ($userCandidate->parentsId != null)
			{
				$parentsModel	= new ParentsModel();
				$parent			= $parentsModel->getParentById($userCandidate->parentsId);
				$name			= $parent->name;
			}
		}

		$sessionData =
		[
			'userId'		=> $user->id,
			'userName'		=> $user->userName,
			'name'			=> $name,
			'userRoleId'	=> $user->userRoleId,
			'isLoggedIn'	=> true,
		];
		
		$this->session->set('iDASUser', (object)$sessionData);
	}
}
