<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function login()
	{
		if ($this->request->getMethod() == 'post')
		{
			$userModel = new UserModel();

			$user = $userModel->login($this->request->getPost());

			if ($user)
			{
				return redirect()->to('/dashbord');
			}
			else
			{
				return redirect()->back()->withInput();
			}
		}

		echo view('components/header');
		echo view('components/login');
	//	var_dump(password_hash('NOMi@1', PASSWORD_DEFAULT));
		echo view('components/footer');
	}
/*
	public function userLogin()
	{
		$userName = $this->request->getPost('userName');
		$userPassword = $this->request->getPost('userPassword');

		$user = $this->userModel->authenticate($this->request->getPost());

		if ($user)
		{
			$this->session->set('user', $user);
			$this->session->setFlashData('message', 'Login Successfully!');
			return redirect()->to('/');
		}
		else
		{
			$this->session->setFlashData('error', 'Incorrect User Name or Password');
			return redirect()->to('login')->withInput();
		}

		
/*
		if ($this->request->getMethod() == 'post')
		{
			$rules =
			[
				'userName'		=> 'required',
				'userPassword'	=> 'required|validateUser[userName,userPassword]',
			];

			$errors =
			[
				'userPassword'	=>
				[
					'validateUser'	=>	'User Name of Password don\'t match'
				]
			]

			if (! $this->validate($rules, $errors))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				$model = new UserModel();
			}
		}
		
	} */
}
