<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\UserRolesModel;

class UserController extends BaseController
{
	public $iDASData = [];
	public function index()
	{
		echo view('components/headerView');

		echo view('components/footerView');
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
				$user		= $usersModel->login((object)$this->request->getPost());

				if ($user)
				{
					$userRolesModel	= new UserRolesModel();
					$userRoleName	= $userRolesModel->getUserRoleName($user->userRoleID); //dd($userRoleName->role);

					$sessionData =
					[
					    'userID'		=> $user->id,
					    'userName'		=> $user->userName,
					    'userRoleID'	=> $user->userRoleID, //$userRoleName->role,
					    'isLoggedIn'	=> true,
					];

					$iDASData =
					[
						'sessionData'	=> $sessionData,
					];

					$this->session->set('iDASUser', (object)$sessionData);
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
		echo view('components/headerView');
		echo view('loginView'); 
		echo password_hash("NOMi@1", PASSWORD_DEFAULT);
		echo view('components/footerView');
	}

	public function logout()
	{
		$this->session->remove('iDASUser');
		$this->session->setFlashData('success', 'Logged Out Successfully..!');
		return redirect()->to(base_url('login'));
	}
}
