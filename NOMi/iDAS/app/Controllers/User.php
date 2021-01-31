<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
	public function index()
	{
		echo view('components/header');
	//	echo view('components/login');
		echo view('components/footer');
	}

	public function login()
	{
		if ($this->request->getMethod() == 'post')
		{
			$userModel = new UserModel();
			$user = $userModel->login($this->request->getPost());

			if ($user)
			{
				$sessionData =
				[
				    'userID'	=> $user->id,
				    'userName'	=> $user->userName
				];

				$this->session->set('iDarEArqamUser', $sessionData);
				$this->session->setFlashData('success', 'LoggedIn Successfully..!'); //dd($this->session->get('iDarEArqamUser'));
				return redirect()->to('/');
			}
			else
			{
				$this->session->setFlashData('danger', 'Incorrect User Name or Password..!');
				return redirect()->back()->withInput();
			}
		}
		echo view('components/header');
		echo view('components/login');
		echo view('components/footer');
			//	var_dump(password_hash('NOMi@1', PASSWORD_DEFAULT));
	}

	public function logout()
	{
		$this->session->remove('iDarEArqamUser');
		$this->session->setFlashData('success', 'LoggedOut Successfully..!');
		return redirect()->to('login');
	}
}
