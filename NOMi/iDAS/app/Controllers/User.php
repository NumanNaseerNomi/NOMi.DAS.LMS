<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
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
					'userName' => ['label' => 'User Name', 'rules' => 'required'],
    				'userPassword' => ['label' => 'Password', 'rules' => 'required|min_length[6]|differs[userName]'],
				]))
	        {
	        	$validationErrors = (Object)$this->validator->getErrors();
	        	return redirect()->back();
	        }
	        else
	        {
	        	$userModel = new UserModel();
				$user = $userModel->login((object)$this->request->getPost());

				if ($user)
				{
					$sessionData =
					[
					    'userID'	=> $user->id,
					    'userName'	=> $user->userName
					];

					$this->session->set('iDASUser', (object)$sessionData);
					$this->session->setFlashData('success', 'Logged In Successfully..!');
					return redirect()->to('/');
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
		echo view('components/footerView');
	}

	public function logout()
	{
		$this->session->remove('iDASUser');
		$this->session->setFlashData('success', 'Logged Out Successfully..!');
		return redirect()->to('login');
	}
}
