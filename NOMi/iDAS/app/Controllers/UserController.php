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
    				'userPassword'	=> ['label' => 'Password', 'rules' => 'required|min_length[6]|differs[userName]'],
				]))
	        {
	        	$validationErrors = (Object)$this->validator->getErrors();
	        	return redirect()->back();
	        }
	        else
	        {
	        	$usersModel	= new UsersModel();
				$user		= $usersModel->login((object)$this->request->getPost()); //dd($user);

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
		//echo password_hash("NOMi@1", PASSWORD_DEFAULT);
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
				$student		= $studentsModel->getStudent($userCandidate->studentsId);
				$name			= $student->name;
			}
			else if ($userCandidate->parentsId != null)
			{
				$parentsModel	= new ParentsModel();
				$parent			= $parentsModel->getParent($userCandidate->parentsId);
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

		// $iDASData =
		// [
		// 	'sessionData'	=> $sessionData,
		// ];

		$this->session->set('iDASUser', (object)$sessionData);
	}
}
